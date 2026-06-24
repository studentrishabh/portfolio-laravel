<template>
  <section id="home">
    <div class="hero-grid-bg"></div>
    <div class="container position-relative">
      <div class="row align-items-center g-5">

        <!-- Left: Text Content -->
        <div class="col-lg-7">
          <div class="hero-badge">
            <span class="dot"></span>
            Available for opportunities
          </div>

          <h1 class="hero-title">
            Hi, I'm <br>
            <span class="name-highlight">Rishabh Chaurasiya</span>
          </h1>

          <p class="hero-role">
            <span class="text-muted-c">$</span> {{ displayedRole }}<span class="cursor"></span>
          </p>

          <p class="hero-desc">
            PHP Laravel Developer with <strong>2+ years</strong> of experience building
            RESTful APIs, secure backend systems, and production-grade applications.
            Passionate about clean architecture and scalable code.
          </p>

          <div class="hero-stats">
            <div class="stat-item">
              <div class="stat-number">2+</div>
              <div class="stat-label">Years Experience</div>
            </div>
            <div class="stat-item">
              <div class="stat-number">3+</div>
              <div class="stat-label">Projects Shipped</div>
            </div>
            <div class="stat-item">
              <div class="stat-number">15+</div>
              <div class="stat-label">APIs Built</div>
            </div>
          </div>

          <div class="d-flex flex-wrap gap-3">
            <a href="#projects" class="btn-primary-custom">
              <i class="bi bi-code-square"></i> View Projects
            </a>
            <a href="#contact" class="btn-ghost-custom">
              <i class="bi bi-send"></i> Contact Me
            </a>
            <a href="/resume/rishabh-chaurasiya-resume.pdf" download class="btn-outline-accent">
              <i class="bi bi-download"></i> Resume
            </a>
          </div>
        </div>

        <!-- Right: Code Card -->
        <div class="col-lg-5 d-none d-lg-flex justify-content-end">
          <div class="hero-code-card">
            <div class="code-header">
              <span class="code-dot cd-red"></span>
              <span class="code-dot cd-yellow"></span>
              <span class="code-dot cd-green"></span>
              <span class="code-title">developer.php</span>
            </div>
            <div>
              <div class="code-line"><span class="code-ln">1</span><span class="code-kw">&lt;?php</span></div>
              <div class="code-line"><span class="code-ln">2</span></div>
              <div class="code-line"><span class="code-ln">3</span><span class="code-kw">class</span> <span class="code-fn">Rishabh</span> <span class="code-kw">extends</span> <span class="code-fn">Developer</span></div>
              <div class="code-line"><span class="code-ln">4</span><span style="color:#7dd3fc;">{</span></div>
              <div class="code-line"><span class="code-ln">5</span>&nbsp;&nbsp;<span class="code-kw">public</span> <span class="code-fn">$role</span> = <span class="code-str">'PHP Laravel Dev'</span>;</div>
              <div class="code-line"><span class="code-ln">6</span>&nbsp;&nbsp;<span class="code-fn">$experience</span> = <span class="code-num">2</span>;</div>
              <div class="code-line"><span class="code-ln">7</span></div>
              <div class="code-line"><span class="code-ln">8</span>&nbsp;&nbsp;<span class="code-kw">public function</span> <span class="code-fn">skills</span>(): array</div>
              <div class="code-line"><span class="code-ln">9</span>&nbsp;&nbsp;{</div>
              <div class="code-line"><span class="code-ln">10</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-kw">return</span> [</div>
              <div class="code-line"><span class="code-ln">11</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-str">'Laravel'</span>, <span class="code-str">'REST API'</span>,</div>
              <div class="code-line"><span class="code-ln">12</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-str">'MySQL'</span>, <span class="code-str">'Vue.js'</span>,</div>
              <div class="code-line"><span class="code-ln">13</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-str">'Sanctum'</span>, <span class="code-str">'Git'</span>,</div>
              <div class="code-line"><span class="code-ln">14</span>&nbsp;&nbsp;&nbsp;&nbsp;];</div>
              <div class="code-line"><span class="code-ln">15</span>&nbsp;&nbsp;}</div>
              <div class="code-line"><span class="code-ln">16</span><span style="color:#7dd3fc;">}</span></div>
              <div class="code-line"><span class="code-ln">17</span></div>
              <div class="code-line"><span class="code-ln">18</span><span class="code-comment">// Currently at E-Nirmaan Software</span></div>
              <div class="code-line"><span class="code-ln">19</span><span class="code-fn">$dev</span> = <span class="code-kw">new</span> <span class="code-fn">Rishabh</span>();</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'HeroSection',
  data() {
    return {
      roles: [
        'PHP Laravel Developer',
        'REST API Specialist',
        'Backend Engineer',
        'MySQL Database Designer'
      ],
      roleIndex: 0,
      charIndex: 0,
      displayedRole: '',
      typing: true
    }
  },
  mounted() {
    this.typeRole()
  },
  methods: {
    typeRole() {
      const current = this.roles[this.roleIndex]
      if (this.typing) {
        if (this.charIndex < current.length) {
          this.displayedRole += current[this.charIndex]
          this.charIndex++
          setTimeout(this.typeRole, 65)
        } else {
          this.typing = false
          setTimeout(this.typeRole, 2000)
        }
      } else {
        if (this.charIndex > 0) {
          this.displayedRole = current.substring(0, this.charIndex - 1)
          this.charIndex--
          setTimeout(this.typeRole, 35)
        } else {
          this.typing = true
          this.roleIndex = (this.roleIndex + 1) % this.roles.length
          setTimeout(this.typeRole, 300)
        }
      }
    }
  }
}
</script>
