<template>
  <section id="experience">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0 fade-up">
          <div class="section-eyebrow">Career</div>
          <h2 class="section-title">Work<br>Experience</h2>
          <div class="section-divider"></div>
          <p style="color: var(--text-secondary); font-size: 0.92rem; line-height: 1.75;">
            Building real-world backend systems with Laravel, designing scalable
            database schemas, and shipping production APIs since Oct 2024.
          </p>

          <div class="mt-4 d-flex flex-column gap-3">
            <div class="exp-stat-card" v-for="stat in stats" :key="stat.label">
              <span class="exp-stat-num">{{ stat.value }}</span>
              <span class="exp-stat-label">{{ stat.label }}</span>
            </div>
          </div>
        </div>

        <div class="col-lg-8 fade-up">
          <div class="timeline">
            <div
              class="timeline-item"
              v-for="exp in experiences"
              :key="exp.role"
            >
              <div class="timeline-date">
                <i class="bi bi-calendar3"></i> {{ exp.period }}
              </div>
              <div class="timeline-card">
                <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 mb-3">
                  <div>
                    <div class="timeline-role">{{ exp.role }}</div>
                    <div class="timeline-company">
                      <i class="bi bi-building"></i> {{ exp.company }}
                      <span style="margin-left:4px; color: var(--text-muted);">— {{ exp.location }}</span>
                    </div>
                  </div>
                  <span class="chip" style="align-self: flex-start;">{{ exp.type }}</span>
                </div>

                <ul class="resp-list">
                  <li v-for="resp in exp.responsibilities" :key="resp">{{ resp }}</li>
                </ul>

                <div class="mt-3 d-flex flex-wrap gap-2">
                  <span class="chip" v-for="tech in exp.tech" :key="tech">{{ tech }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'ExperienceSection',
  data() {
    return {
      stats: [
        { value: '2+',   label: 'Years of Experience'  },
        { value: '10+',  label: 'REST APIs Developed'  },
        { value: '3+',   label: 'Production Projects'  },
        { value: '100%', label: 'On-time Delivery'     }
      ],
      experiences: [
        {
          role: 'PHP Laravel Developer',
          company: 'E-Nirmaan Software Solution Pvt. Ltd.',
          location: 'Noida',
          period: 'Oct 2024 – Present',
          type: 'Full-time',
          responsibilities: [
            'Designed and implemented RESTful APIs using Laravel 10 for customer management operations.',
            'Built a secure authentication & authorization system using Laravel Sanctum token-based auth.',
            'Created CRUD APIs for customer listing, filtering, and payment status management.',
            'Developed CSV bulk upload with duplicate record validation and efficient data processing.',
            'Implemented email & WhatsApp notification workflows for pending customer payment alerts.',
            'Built reporting APIs generating customer summary reports (paid vs pending statistics).',
            'Performed thorough API testing using Postman — request validation, responses, error handling.',
            'Worked with MySQL, Eloquent ORM, migrations, and followed Laravel best practices throughout.',
            'Managed routes, controllers, middleware, and business logic following strict MVC architecture.'
          ],
          tech: ['Laravel 10', 'PHP 8.2', 'MySQL 8.0', 'Sanctum', 'Eloquent', 'Postman', 'Git']
        },
        {
          role: 'HRMS Project – Lead Backend Dev',
          company: 'E-Nirmaan Software Solution Pvt. Ltd.',
          location: 'Noida',
          period: '2024 – Present',
          type: 'Project',
          responsibilities: [
            'Built Employee Management, Attendance, Leave & Expense Management modules from scratch.',
            'Implemented secure login, OTP verification, and role-based access control (RBAC).',
            'Created REST APIs with proper validation, middleware guards, and structured error responses.',
            'Designed complex database relationships using Eloquent ORM and version-controlled migrations.',
            'Integrated email notification system for employee workflow events and system updates.',
            'Improved application performance through query optimization and N+1 problem elimination.'
          ],
          tech: ['Laravel 10', 'PHP 8.2', 'MySQL', 'RBAC', 'OTP', 'Email Notifications']
        },
        {
          role: 'PHP Developer – Strive Task System',
          company: 'E-Nirmaan Software Solution Pvt. Ltd.',
          location: 'Noida',
          period: '2024',
          type: 'Project',
          responsibilities: [
            'Developed task creation, assignment, tracking, and activity logging features.',
            'Built secure backend APIs with authentication middleware and authorization checks.',
            'Implemented real-time notifications for task updates and user activity changes.',
            'Designed a scalable database structure with indexes and optimized queries for performance.',
            'Worked on frontend-backend integration using AJAX and jQuery for smooth UX.'
          ],
          tech: ['Laravel 10', 'PHP 8.2', 'MySQL', 'AJAX', 'jQuery', 'Bootstrap 5']
        }
      ]
    }
  }
}
</script>

<style scoped>
.exp-stat-card {
  display: flex;
  align-items: center;
  gap: 1rem;
  background: var(--bg-card);
  border: 1px solid var(--border);
  border-radius: var(--radius-md);
  padding: 0.9rem 1.2rem;
}
.exp-stat-num {
  font-family: var(--font-mono);
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--accent);
  line-height: 1;
  min-width: 50px;
}
.exp-stat-label {
  font-size: 0.82rem;
  color: var(--text-secondary);
}
</style>
