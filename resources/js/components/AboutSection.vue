<template>
  <section id="about">
    <div class="container">
      <div class="row g-5 align-items-start">

        <!-- Left: Terminal Bio -->
        <div class="col-lg-6 fade-up">
          <div class="about-terminal">
            <div class="terminal-bar">
              <span class="code-dot cd-red"></span>
              <span class="code-dot cd-yellow"></span>
              <span class="code-dot cd-green"></span>
              <span style="color:#4d6278; font-family: var(--font-mono); font-size:0.75rem; margin-left:8px;">about.sh</span>
            </div>
            <div class="terminal-body">
              <div><span class="t-prompt">rishabh@portfolio</span><span style="color:#4d6278;">:</span><span style="color:#3b82f6;">~</span><span style="color:#4d6278;">$</span> <span class="t-cmd">cat about.json</span></div>
              <br>
              <div><span class="t-key">"name"</span><span style="color:#e2e8f0;">:</span> <span class="t-val">"Rishabh Chaurasiya"</span>,</div>
              <div><span class="t-key">"role"</span><span style="color:#e2e8f0;">:</span> <span class="t-val">"PHP Laravel Developer"</span>,</div>
              <div><span class="t-key">"location"</span><span style="color:#e2e8f0;">:</span> <span class="t-val">"Noida, Uttar Pradesh"</span>,</div>
              <div><span class="t-key">"experience"</span><span style="color:#e2e8f0;">:</span> <span class="t-val">"2+ years"</span>,</div>
              <div><span class="t-key">"company"</span><span style="color:#e2e8f0;">:</span> <span class="t-val">"E-Nirmaan Software Pvt. Ltd."</span>,</div>
              <div><span class="t-key">"education"</span><span style="color:#e2e8f0;">:</span> <span class="t-val">"B.A. – Dr. RML Avadh University"</span>,</div>
              <div><span class="t-key">"languages"</span><span style="color:#e2e8f0;">:</span> [<span class="t-val">"Hindi"</span>, <span class="t-val">"English"</span>],</div>
              <div><span class="t-key">"email"</span><span style="color:#e2e8f0;">:</span> <span class="t-val">"rishabh.chaurasiya011@gmail.com"</span>,</div>
              <div><span class="t-key">"status"</span><span style="color:#e2e8f0;">:</span> <span style="color:#22c55e;">"open_to_opportunities"</span></div>
              <br>
              <div><span class="t-prompt">rishabh@portfolio</span><span style="color:#4d6278;">:</span><span style="color:#3b82f6;">~</span><span style="color:#4d6278;">$</span> <span class="cursor" style="display:inline-block; width:8px; height:1em; background:#3b82f6; vertical-align:text-bottom; animation: blink 1s step-end infinite;"></span></div>
            </div>
          </div>
        </div>

        <!-- Right: Summary -->
        <div class="col-lg-6 fade-up">
          <div class="section-eyebrow">About Me</div>
          <h2 class="section-title">Backend Developer<br>Who Delivers</h2>
          <div class="section-divider"></div>

          <p style="color: var(--text-secondary); line-height: 1.8; margin-bottom: 1.2rem;">
            I'm a PHP Laravel Developer with over <strong style="color: var(--text-primary);">2 years of professional experience</strong>
            building robust, production-level backend systems. Currently at <strong style="color: var(--accent);">E-Nirmaan Software Pvt. Ltd.</strong>,
            I architect and maintain RESTful APIs that power real-world applications.
          </p>
          <p style="color: var(--text-secondary); line-height: 1.8; margin-bottom: 2rem;">
            My work spans full project lifecycles — from database schema design and API development
            to authentication systems, third-party integrations, and performance optimization.
            I care deeply about clean code, MVC architecture, and writing APIs that are
            predictable, well-validated, and easy to consume.
          </p>

          <div class="about-highlights">
            <div class="highlight-card" v-for="item in highlights" :key="item.title">
              <div class="highlight-icon"><i :class="item.icon"></i></div>
              <div class="highlight-title">{{ item.title }}</div>
              <div class="highlight-sub">{{ item.sub }}</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'AboutSection',
  data() {
    return {
      highlights: [
        { icon: 'bi bi-hdd-network', title: 'API Development',    sub: 'RESTful APIs with Sanctum auth' },
        { icon: 'bi bi-database',    title: 'Database Design',    sub: 'MySQL, Eloquent ORM, migrations' },
        { icon: 'bi bi-shield-check', title: 'Secure Systems',    sub: 'Auth, RBAC, token security' },
        { icon: 'bi bi-bug',          title: 'Testing & QA',      sub: 'Postman, manual testing, bug fixes' }
      ]
    }
  }
}
</script>
