<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * CreateContactsTable Migration
 *
 * Creates the `contacts` table which stores all portfolio contact form submissions.
 *
 * WHY THIS FILE EXISTS:
 * Laravel uses migrations to version-control database schema changes.
 * Running `php artisan migrate` will execute this file and create the table.
 * This ensures every developer or server has the exact same database structure.
 */
return new class extends Migration
{
    /**
     * Run the migration — create the contacts table.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            // Auto-incrementing primary key
            $table->id();

            // Sender's full name (required, max 100 chars)
            $table->string('name', 100);

            // Sender's email address (required, max 150 chars)
            // Indexed for faster lookups if needed
            $table->string('email', 150)->index();

            // The message body (up to 1000 characters)
            $table->text('message');

            // Whether the portfolio owner has read/acknowledged this message
            // Defaults to false (unread)
            $table->boolean('is_read')->default(false);

            // Laravel's automatic created_at and updated_at columns
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration — drop the contacts table.
     * Called when running `php artisan migrate:rollback`
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
