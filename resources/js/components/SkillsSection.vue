<template>
  <section id="skills">
    <div class="container">
      <div class="text-center mb-5 fade-up">
        <div class="section-eyebrow justify-content-center">Technical Skills</div>
        <h2 class="section-title">What I Work With</h2>
        <div class="section-divider mx-auto"></div>
        <p style="color: var(--text-secondary); max-width: 500px; margin: 0 auto; font-size: 0.92rem;">
          A curated stack refined over 2 years of production development.
        </p>
      </div>

      <!-- Category Tabs -->
      <div class="d-flex justify-content-center flex-wrap gap-2 mb-4 fade-up">
        <button
          v-for="cat in categories"
          :key="cat.id"
          class="filter-btn"
          :class="{ active: activeCategory === cat.id }"
          @click="activeCategory = cat.id"
        >
          <i :class="cat.icon"></i> {{ cat.label }}
        </button>
      </div>

      <div class="skills-grid fade-up">
        <div
          v-for="skill in filteredSkills"
          :key="skill.name"
          class="skill-card"
        >
          <div class="skill-icon-wrap">
            <span v-html="skill.icon"></span>
          </div>
          <div class="skill-name">{{ skill.name }}</div>
          <span class="skill-tag">{{ skill.tag }}</span>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'SkillsSection',
  data() {
    return {
      activeCategory: 'all',
      categories: [
        { id: 'all',      label: 'All',      icon: 'bi bi-grid'        },
        { id: 'backend',  label: 'Backend',  icon: 'bi bi-server'      },
        { id: 'database', label: 'Database', icon: 'bi bi-database'    },
        { id: 'frontend', label: 'Frontend', icon: 'bi bi-layout-text-window' },
        { id: 'tools',    label: 'Tools',    icon: 'bi bi-tools'       }
      ],
      skills: [
        // Backend
        { name: 'PHP',             tag: 'backend',  category: 'backend',  icon: '<span style="font-size:1.5rem;font-family:monospace;font-weight:700;color:#7dd3fc;">php</span>' },
        { name: 'Laravel 10',      tag: 'backend',  category: 'backend',  icon: '<i class="bi bi-layers" style="font-size:1.5rem;color:#f05340;"></i>' },
        { name: 'Core PHP',        tag: 'backend',  category: 'backend',  icon: '<span style="font-size:1.3rem;font-family:monospace;font-weight:700;color:#a78bfa;">{}</span>' },
        { name: 'REST API',        tag: 'backend',  category: 'backend',  icon: '<i class="bi bi-hdd-network" style="font-size:1.4rem;color:#22c55e;"></i>' },
        { name: 'Laravel Sanctum', tag: 'auth',     category: 'backend',  icon: '<i class="bi bi-shield-lock" style="font-size:1.4rem;color:#f59e0b;"></i>' },
        { name: 'MVC Pattern',     tag: 'pattern',  category: 'backend',  icon: '<i class="bi bi-diagram-3" style="font-size:1.4rem;color:#3b82f6;"></i>' },

        // Database
        { name: 'MySQL',           tag: 'database', category: 'database', icon: '<i class="bi bi-database-fill" style="font-size:1.4rem;color:#00758f;"></i>' },
        { name: 'Eloquent ORM',    tag: 'database', category: 'database', icon: '<i class="bi bi-link-45deg" style="font-size:1.5rem;color:#a78bfa;"></i>' },
        { name: 'Migrations',      tag: 'database', category: 'database', icon: '<i class="bi bi-arrow-repeat" style="font-size:1.4rem;color:#22c55e;"></i>' },
        { name: 'SQL Queries',     tag: 'database', category: 'database', icon: '<span style="font-size:1rem;font-family:monospace;font-weight:700;color:#f59e0b;">SQL</span>' },

        // Frontend
        { name: 'Vue.js 3',        tag: 'frontend', category: 'frontend', icon: '<i class="bi bi-hexagon-fill" style="font-size:1.4rem;color:#42b883;"></i>' },
        { name: 'JavaScript',      tag: 'frontend', category: 'frontend', icon: '<span style="font-size:1rem;font-family:monospace;font-weight:700;color:#f7df1e;">JS</span>' },
        { name: 'jQuery',          tag: 'frontend', category: 'frontend', icon: '<i class="bi bi-code-slash" style="font-size:1.4rem;color:#0769ad;"></i>' },
        { name: 'AJAX',            tag: 'frontend', category: 'frontend', icon: '<i class="bi bi-arrow-left-right" style="font-size:1.4rem;color:#3b82f6;"></i>' },
        { name: 'Bootstrap 5',     tag: 'frontend', category: 'frontend', icon: '<i class="bi bi-bootstrap-fill" style="font-size:1.4rem;color:#7952b3;"></i>' },
        { name: 'HTML5',           tag: 'frontend', category: 'frontend', icon: '<span style="font-size:0.9rem;font-family:monospace;font-weight:700;color:#e34f26;">HTML</span>' },
        { name: 'CSS3',            tag: 'frontend', category: 'frontend', icon: '<span style="font-size:1rem;font-family:monospace;font-weight:700;color:#264de4;">CSS</span>' },

        // Tools
        { name: 'Git',             tag: 'tools',    category: 'tools',    icon: '<i class="bi bi-git" style="font-size:1.4rem;color:#f05033;"></i>' },
        { name: 'GitHub',          tag: 'tools',    category: 'tools',    icon: '<i class="bi bi-github" style="font-size:1.4rem;color:#e2e8f0;"></i>' },
        { name: 'Postman',         tag: 'tools',    category: 'tools',    icon: '<i class="bi bi-send-fill" style="font-size:1.3rem;color:#ff6c37;"></i>' },
        { name: 'Composer',        tag: 'tools',    category: 'tools',    icon: '<i class="bi bi-box-seam" style="font-size:1.4rem;color:#8892be;"></i>' }
      ]
    }
  },
  computed: {
    filteredSkills() {
      if (this.activeCategory === 'all') return this.skills
      return this.skills.filter(s => s.category === this.activeCategory)
    }
  }
}
</script>

<style scoped>
.filter-btn {
  background: var(--bg-card);
  border: 1px solid var(--border);
  border-radius: var(--radius-sm);
  padding: 0.5rem 1.2rem;
  color: var(--text-secondary);
  font-size: 0.82rem;
  font-weight: 500;
  cursor: pointer;
  transition: all var(--transition);
  display: inline-flex;
  align-items: center;
  gap: 6px;
}
.filter-btn:hover,
.filter-btn.active {
  background: var(--accent-dim);
  border-color: var(--accent);
  color: var(--accent);
}
</style>
