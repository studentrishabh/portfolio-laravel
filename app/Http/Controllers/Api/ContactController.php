<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * ContactController
 *
 * Handles the contact form API endpoint.
 * Validates incoming data, persists it to MySQL, and returns JSON responses.
 */
class ContactController extends Controller
{
    /**
     * Store a new contact message.
     *
     * POST /api/contact
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        // --- Validation ---
        // Laravel validates against these rules before any DB write.
        $validator = Validator::make($request->all(), [
            'name'    => ['required', 'string', 'min:2', 'max:100'],
            'email'   => ['required', 'string', 'email', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:1000'],
        ], [
            'name.required'    => 'Your name is required.',
            'name.min'         => 'Name must be at least 2 characters.',
            'email.required'   => 'Email address is required.',
            'email.email'      => 'Please provide a valid email address.',
            'message.required' => 'A message is required.',
            'message.min'      => 'Message must be at least 10 characters.',
            'message.max'      => 'Message cannot exceed 1000 characters.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed. Please check your input.',
                'errors'  => $validator->errors(),
            ], 422);
        }

        // --- Persist to Database ---
        // Using mass-assignment via fillable fields defined in the Contact model.
        $contact = Contact::create([
            'name'    => trim($request->name),
            'email'   => strtolower(trim($request->email)),
            'message' => trim($request->message),
            'is_read' => false,
        ]);

        // --- Return Success Response ---
        return response()->json([
            'success' => true,
            'message' => "Thanks {$contact->name}! Your message has been received. I'll reply within 24 hours.",
            'data'    => [
                'id'         => $contact->id,
                'created_at' => $contact->created_at->toDateTimeString(),
            ],
        ], 201);
    }
}
