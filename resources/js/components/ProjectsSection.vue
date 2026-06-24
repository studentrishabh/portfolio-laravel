<template>
  <section id="projects">
    <div class="container">
      <div class="text-center mb-5 fade-up">
        <div class="section-eyebrow justify-content-center">Portfolio</div>
        <h2 class="section-title">Projects Shipped</h2>
        <div class="section-divider mx-auto"></div>
        <p style="color: var(--text-secondary); max-width: 480px; margin: 0 auto; font-size: 0.92rem;">
          Production-grade applications built with Laravel 10, MySQL, and modern frontend tooling.
        </p>
      </div>

      <div class="row g-4">
        <div
          class="col-lg-4 col-md-6 fade-up"
          v-for="(project, index) in projects"
          :key="project.title"
          :style="`transition-delay: ${index * 0.1}s`"
        >
          <div class="project-card">
            <div class="project-header">
              <span class="project-number mono">{{ String(index + 1).padStart(2, '0') }}</span>
              <span class="project-status" :class="project.statusClass">{{ project.status }}</span>
            </div>

            <div class="project-body">
              <div class="project-title">{{ project.title }}</div>
              <p class="project-desc">{{ project.description }}</p>

              <div class="mb-3">
                <div style="font-family: var(--font-mono); font-size: 0.7rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 0.5rem;">
                  Key Features
                </div>
                <div class="feature-chips">
                  <span class="chip" v-for="feat in project.features" :key="feat">{{ feat }}</span>
                </div>
              </div>
            </div>

            <div class="project-footer">
              <div>
                <div class="tech-stack-inline">{{ project.stack }}</div>
                <div style="font-size: 0.72rem; color: var(--text-muted); margin-top: 2px;">
                  <i class="bi bi-people"></i> Team of {{ project.teamSize }}
                </div>
              </div>
              <a
                v-if="project.url"
                :href="project.url"
                target="_blank"
                rel="noopener noreferrer"
                class="project-link"
              >
                Live <i class="bi bi-arrow-up-right"></i>
              </a>
              <span v-else class="project-link" style="cursor: default; opacity: 0.4;">
                Private
              </span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<script>
export default {
  name: 'ProjectsSection',
  data() {
    return {
      projects: [
        {
          title: 'Customer Management System',
          description: 'A production CRM backend powering customer lifecycle management — from onboarding and payment tracking to bulk data import and automated notifications.',
          status: 'Live',
          statusClass: 'status-live',
          url: null,
          stack: 'Laravel 10 · PHP 8.2 · MySQL 8.0',
          teamSize: 4,
          features: [
            'RESTful APIs',
            'Laravel Sanctum',
            'CRUD Operations',
            'CSV Bulk Upload',
            'Duplicate Validation',
            'Payment Status API',
            'Reporting APIs',
            'Email Notifications',
            'WhatsApp Alerts'
          ]
        },
        {
          title: 'HRMS – HR Management System',
          description: 'A comprehensive Human Resource Management System handling the complete employee lifecycle including attendance, leave, expense claims, and role-based access control.',
          status: 'Live',
          statusClass: 'status-live',
          url: 'https://employee.hyten.ai',
          stack: 'Laravel 10 · PHP 8.2 · MySQL 8.0',
          teamSize: 4,
          features: [
            'Employee Management',
            'Attendance Module',
            'Leave Management',
            'Expense Management',
            'OTP Verification',
            'Role-Based Access',
            'Email Notifications',
            'Secure Auth System'
          ]
        },
        {
          title: 'Strive – Task Management System',
          description: 'A collaborative task management platform enabling teams to create, assign, track, and log tasks with real-time activity feeds and smart notifications.',
          status: 'Active',
          statusClass: 'status-active',
          url: 'https://strive.enirmaan.com',
          stack: 'Laravel 10 · PHP 8.2 · MySQL 8.0',
          teamSize: 3,
          features: [
            'Task Creation',
            'Team Assignment',
            'Progress Tracking',
            'Activity Logs',
            'Notifications',
            'Secure APIs',
            'AJAX Frontend',
            'Bootstrap 5 UI'
          ]
        }
      ]
    }
  }
}
</script>
