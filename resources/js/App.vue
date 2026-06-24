<template>
  <div>
    <NavBar :active-section="activeSection" />

    <main>
      <HeroSection />
      <AboutSection />
      <SkillsSection />
      <ExperienceSection />
      <ProjectsSection />
      <ContactSection />
    </main>

    <FooterSection />

    <!-- Back to top -->
    <a href="#home" class="back-top" title="Back to top" v-show="showBackTop">
      <i class="bi bi-arrow-up"></i>
    </a>
  </div>
</template>

<script>
import NavBar          from './components/NavBar.vue'
import HeroSection     from './components/HeroSection.vue'
import AboutSection    from './components/AboutSection.vue'
import SkillsSection   from './components/SkillsSection.vue'
import ExperienceSection from './components/ExperienceSection.vue'
import ProjectsSection from './components/ProjectsSection.vue'
import ContactSection  from './components/ContactSection.vue'
import FooterSection   from './components/FooterSection.vue'

export default {
  name: 'App',
  components: {
    NavBar, HeroSection, AboutSection, SkillsSection,
    ExperienceSection, ProjectsSection, ContactSection, FooterSection
  },
  data() {
    return {
      activeSection: 'home',
      showBackTop: false
    }
  },
  mounted() {
    this.initScrollObserver()
    this.initFadeUpObserver()
    window.addEventListener('scroll', this.onScroll)
  },
  beforeUnmount() {
    window.removeEventListener('scroll', this.onScroll)
  },
  methods: {
    onScroll() {
      this.showBackTop = window.scrollY > 400
    },
    initScrollObserver() {
      const sections = document.querySelectorAll('section[id]')
      const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
          if (e.isIntersecting) this.activeSection = e.target.id
        })
      }, { rootMargin: '-40% 0px -55% 0px' })
      sections.forEach(s => io.observe(s))
    },
    initFadeUpObserver() {
      const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
          if (e.isIntersecting) {
            e.target.classList.add('visible')
            io.unobserve(e.target)
          }
        })
      }, { rootMargin: '0px 0px -80px 0px' })

      // Observe after next tick so DOM is ready
      this.$nextTick(() => {
        document.querySelectorAll('.fade-up').forEach(el => io.observe(el))
      })
    }
  }
}
</script>
