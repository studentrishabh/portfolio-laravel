<template>
  <section id="contact">
    <div class="container">
      <div class="text-center mb-5 fade-up">
        <div class="section-eyebrow justify-content-center">Get In Touch</div>
        <h2 class="section-title">Let's Work Together</h2>
        <div class="section-divider mx-auto"></div>
        <p style="color: var(--text-secondary); max-width: 500px; margin: 0 auto; font-size: 0.92rem;">
          Open to full-time roles, freelance projects, and consulting. Drop a message and I'll reply within 24 hours.
        </p>
      </div>

      <div class="contact-wrapper fade-up">
        <!-- Info Card -->
        <div class="contact-info-card">
          <h3>Rishabh Chaurasiya</h3>
          <p class="contact-tagline">
            PHP Laravel Developer based in Noida, UP.<br>
            Currently working at E-Nirmaan Software and actively open to new opportunities.
          </p>

          <div class="contact-links">
            <a href="mailto:rishabh.chaurasiya011@gmail.com" class="contact-link">
              <i class="bi bi-envelope-fill"></i>
              rishabh.chaurasiya011@gmail.com
            </a>
            <a href="tel:+919217659349" class="contact-link">
              <i class="bi bi-telephone-fill"></i>
              +91 9217659349
            </a>
            <a href="https://www.linkedin.com/in/rishabh-chau" target="_blank" rel="noopener" class="contact-link">
              <i class="bi bi-linkedin"></i>
              linkedin.com/in/rishabh-chau
            </a>
            <a href="https://github.com/studentrishabh" target="_blank" rel="noopener" class="contact-link">
              <i class="bi bi-github"></i>
              github.com/studentrishabh
            </a>
            <div class="contact-link" style="cursor: default;">
              <i class="bi bi-geo-alt-fill"></i>
              Noida, Uttar Pradesh, India
            </div>
          </div>

          <div class="mt-4 p-3" style="background: var(--bg-primary); border: 1px solid var(--border); border-radius: var(--radius-md);">
            <div style="font-family: var(--font-mono); font-size: 0.75rem; color: var(--text-muted); margin-bottom: 0.5rem;">AVAILABILITY</div>
            <div style="display: flex; align-items: center; gap: 8px;">
              <span style="width:8px;height:8px;border-radius:50%;background:#22c55e;display:inline-block;animation: pulse-dot 2s infinite;"></span>
              <span style="color: var(--green); font-size: 0.88rem; font-weight: 600;">Open to new opportunities</span>
            </div>
          </div>
        </div>

        <!-- Contact Form Card -->
        <div class="contact-form-card">
          <h3 style="font-size: 1.25rem; margin-bottom: 0.4rem;">Send a Message</h3>
          <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1.5rem;">
            I read every message and respond personally.
          </p>

          <!-- Success Alert -->
          <div v-if="successMessage" class="alert-success">
            <i class="bi bi-check-circle-fill"></i>
            {{ successMessage }}
          </div>

          <!-- Error Alert -->
          <div v-if="serverError" class="alert-error">
            <i class="bi bi-exclamation-triangle-fill"></i>
            {{ serverError }}
          </div>

          <div class="form-group">
            <label class="form-label-custom">Your Name *</label>
            <input
              v-model="form.name"
              type="text"
              class="form-input"
              :class="{ 'is-error': errors.name }"
              placeholder="Rahul Sharma"
              maxlength="100"
            />
            <div v-if="errors.name" class="form-error">
              <i class="bi bi-exclamation-circle"></i> {{ errors.name }}
            </div>
          </div>

          <div class="form-group">
            <label class="form-label-custom">Email Address *</label>
            <input
              v-model="form.email"
              type="email"
              class="form-input"
              :class="{ 'is-error': errors.email }"
              placeholder="rahul@example.com"
              maxlength="150"
            />
            <div v-if="errors.email" class="form-error">
              <i class="bi bi-exclamation-circle"></i> {{ errors.email }}
            </div>
          </div>

          <div class="form-group">
            <label class="form-label-custom">Message *</label>
            <textarea
              v-model="form.message"
              class="form-input"
              :class="{ 'is-error': errors.message }"
              placeholder="Hi Rishabh, I'd like to discuss a Laravel project..."
              rows="5"
              maxlength="1000"
            ></textarea>
            <div style="display:flex; justify-content: space-between; align-items: center; margin-top: 4px;">
              <div v-if="errors.message" class="form-error">
                <i class="bi bi-exclamation-circle"></i> {{ errors.message }}
              </div>
              <span style="font-size:0.72rem; color: var(--text-muted); margin-left: auto;">
                {{ form.message.length }}/1000
              </span>
            </div>
          </div>

          <button
            class="btn-primary-custom w-100 justify-content-center"
            @click="submitForm"
            :disabled="loading"
          >
            <span v-if="loading">
              <i class="bi bi-arrow-repeat" style="animation: spin 1s linear infinite;"></i>
              Sending...
            </span>
            <span v-else>
              <i class="bi bi-send-fill"></i> Send Message
            </span>
          </button>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios'

export default {
  name: 'ContactSection',
  data() {
    return {
      form: { name: '', email: '', message: '' },
      errors: {},
      loading: false,
      successMessage: '',
      serverError: ''
    }
  },
  methods: {
    validateForm() {
      this.errors = {}
      if (!this.form.name.trim() || this.form.name.trim().length < 2) {
        this.errors.name = 'Name must be at least 2 characters.'
      }
      const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
      if (!this.form.email.trim() || !emailRe.test(this.form.email)) {
        this.errors.email = 'Please enter a valid email address.'
      }
      if (!this.form.message.trim() || this.form.message.trim().length < 10) {
        this.errors.message = 'Message must be at least 10 characters.'
      }
      return Object.keys(this.errors).length === 0
    },
    async submitForm() {
      this.successMessage = ''
      this.serverError = ''
      if (!this.validateForm()) return

      this.loading = true
      try {
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content
        const response = await axios.post('/api/contact', this.form, {
          headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          }
        })
        this.successMessage = response.data.message || 'Message sent! I\'ll reply within 24 hours.'
        this.form = { name: '', email: '', message: '' }
        this.errors = {}
      } catch (err) {
        if (err.response?.status === 422) {
          // Laravel validation errors
          const laravelErrors = err.response.data.errors || {}
          Object.keys(laravelErrors).forEach(field => {
            this.errors[field] = laravelErrors[field][0]
          })
        } else {
          this.serverError = 'Something went wrong. Please try again or email me directly.'
        }
      } finally {
        this.loading = false
      }
    }
  }
}
</script>

<style scoped>
@keyframes spin { to { transform: rotate(360deg); } }
</style>
