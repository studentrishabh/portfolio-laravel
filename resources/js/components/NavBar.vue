<template>
  <nav class="portfolio-nav">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between py-3">
        <!-- Brand -->
        <a href="#home" class="nav-brand">
          rc<span>.</span>dev
        </a>

        <!-- Desktop Links -->
        <ul class="nav-links d-none d-lg-flex align-items-center gap-1 list-unstyled mb-0">
          <li v-for="item in navItems" :key="item.id">
            <a
              :href="`#${item.id}`"
              class="nav-link-custom"
              :class="{ active: activeSection === item.id }"
            >{{ item.label }}</a>
          </li>
        </ul>

        <!-- Resume Button -->
        <a
          href="/resume/rishabh-chaurasiya-resume.pdf"
          download
          class="btn-primary-custom d-none d-lg-inline-flex"
          style="padding: 0.55rem 1.2rem; font-size: 0.82rem;"
        >
          <i class="bi bi-download"></i> Resume
        </a>

        <!-- Mobile Toggle -->
        <button class="nav-toggle d-lg-none" @click="menuOpen = !menuOpen" aria-label="Toggle menu">
          <i :class="menuOpen ? 'bi bi-x-lg' : 'bi bi-list'"></i>
        </button>
      </div>

      <!-- Mobile Menu -->
      <transition name="slide-down">
        <div v-if="menuOpen" class="mobile-menu pb-3">
          <ul class="list-unstyled mb-3 d-flex flex-column gap-1">
            <li v-for="item in navItems" :key="item.id">
              <a
                :href="`#${item.id}`"
                class="nav-link-custom d-block"
                :class="{ active: activeSection === item.id }"
                @click="menuOpen = false"
              >{{ item.label }}</a>
            </li>
          </ul>
          <a href="/resume/rishabh-chaurasiya-resume.pdf" download class="btn-primary-custom w-100 justify-content-center">
            <i class="bi bi-download"></i> Download Resume
          </a>
        </div>
      </transition>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'NavBar',
  props: {
    activeSection: { type: String, default: 'home' }
  },
  data() {
    return {
      menuOpen: false,
      navItems: [
        { id: 'home',       label: 'Home'       },
        { id: 'about',      label: 'About'      },
        { id: 'skills',     label: 'Skills'     },
        { id: 'experience', label: 'Experience' },
        { id: 'projects',   label: 'Projects'   },
        { id: 'contact',    label: 'Contact'    }
      ]
    }
  }
}
</script>

<style scoped>
.slide-down-enter-active,
.slide-down-leave-active { transition: all 0.25s ease; }
.slide-down-enter-from,
.slide-down-leave-to   { opacity: 0; transform: translateY(-10px); }
</style>
