<template>
  <footer>
    <div class="container">
      <div class="footer-inner">
        <div class="footer-copy">
          <span style="font-size: 0.9rem; margin-right: 8px;">rc<span>.</span>dev</span>
          &copy; {{ year }} <span>Rishabh Chaurasiya</span>.
          Built with <span style="color: #ef4444;">♥</span> using Laravel 10 + Vue.js 3
        </div>

        <div class="footer-social">
          <a href="mailto:rishabh.chaurasiya011@gmail.com" class="social-btn" title="Email">
            <i class="bi bi-envelope"></i>
          </a>
          <a href="https://github.com/studentrishabh" target="_blank" rel="noopener" class="social-btn" title="GitHub">
            <i class="bi bi-github"></i>
          </a>
          <a href="https://www.linkedin.com/in/rishabh-chau" target="_blank" rel="noopener" class="social-btn" title="LinkedIn">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="tel:+919217659349" class="social-btn" title="Phone">
            <i class="bi bi-telephone"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'FooterSection',
  data() {
    return {
      year: new Date().getFullYear()
    }
  }
}
</script>
