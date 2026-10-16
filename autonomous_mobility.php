<?php include "header.php";?>
<section class="robotec-mobility">
  <style>
    .robotec-mobility {
      --rm-green: #238636;
      --rm-dark: #123524;
      --rm-light: #f3f8f3;
      --rm-text: #34443a;
      font-family: Arial, Helvetica, sans-serif;
      color: var(--rm-text);
      line-height: 1.75;
      background: #ffffff;
      overflow: hidden;
    }

    .robotec-mobility * {
      box-sizing: border-box;
    }

    .robotec-mobility .rm-container {
      width: min(1160px, 92%);
      margin: auto;
    }

    .robotec-mobility .rm-hero {
      padding: 65px 25px;
      border-radius: 18px;
      text-align: center;
      color: #ffffff;
      background: linear-gradient(135deg, #103d27, #238636);
      margin-bottom: 45px;
    }

    .robotec-mobility .rm-label {
      display: inline-block;
      padding: 7px 15px;
      border: 1px solid rgba(255,255,255,.45);
      border-radius: 30px;
      font-size: 13px;
      letter-spacing: 1px;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .robotec-mobility h2,
    .robotec-mobility h3 {
      line-height: 1.3;
      margin-top: 0;
    }

    .robotec-mobility .rm-hero h2 {
      color: #ffffff;
      font-size: clamp(30px, 4vw, 44px);
      margin-bottom: 18px;
    }

    .robotec-mobility .rm-hero p {
      max-width: 850px;
      margin: 0 auto;
      color: #eef8ef;
      font-size: 17px;
    }

    .robotec-mobility .rm-section {
      margin: 48px 0;
    }

    .robotec-mobility .rm-heading {
      text-align: center;
      color: var(--rm-dark);
      font-size: clamp(25px, 3vw, 32px);
      margin-bottom: 15px;
    }

    .robotec-mobility .rm-intro {
      max-width: 900px;
      margin: 0 auto 30px;
      text-align: center;
    }

    .robotec-mobility .rm-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 22px;
      margin-top: 28px;
    }

    .robotec-mobility .rm-card {
      padding: 25px;
      background: var(--rm-light);
      border: 1px solid #e1ece2;
      border-radius: 14px;
      transition: transform .2s ease, box-shadow .2s ease;
    }

    .robotec-mobility .rm-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 25px rgba(18, 53, 36, .09);
    }

    .robotec-mobility .rm-icon {
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #dcefe0;
      color: var(--rm-green);
      border-radius: 12px;
      font-size: 25px;
      margin-bottom: 16px;
    }

    .robotec-mobility .rm-card h3 {
      color: var(--rm-dark);
      font-size: 19px;
      margin-bottom: 10px;
    }

    .robotec-mobility .rm-card p {
      margin: 0;
      font-size: 15px;
    }

    .robotec-mobility .rm-feature {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 35px;
      align-items: start;
      padding: 32px;
      border-radius: 16px;
      background: #f7faf7;
      border: 1px solid #e4eee5;
    }

    .robotec-mobility .rm-feature h3 {
      color: var(--rm-dark);
      font-size: 23px;
      margin-bottom: 14px;
    }

    .robotec-mobility .rm-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .robotec-mobility .rm-list li {
      position: relative;
      padding: 8px 0 8px 30px;
    }

    .robotec-mobility .rm-list li::before {
      content: "✓";
      position: absolute;
      left: 0;
      top: 8px;
      color: var(--rm-green);
      font-weight: bold;
      font-size: 18px;
    }

    .robotec-mobility .rm-vision {
      padding: 38px 30px;
      background: var(--rm-dark);
      border-radius: 16px;
      text-align: center;
      color: #ffffff;
    }

    .robotec-mobility .rm-vision h3 {
      color: #ffffff;
      font-size: 27px;
      margin-bottom: 12px;
    }

    .robotec-mobility .rm-vision p {
      max-width: 850px;
      margin: auto;
      color: #e0eee4;
    }

    .robotec-mobility .rm-footer {
      text-align: center;
      padding: 25px 10px 40px;
      font-size: 14px;
      color: #607166;
    }

    .robotec-mobility .rm-footer a {
      color: var(--rm-green);
      font-weight: bold;
      text-decoration: none;
    }

    .robotec-mobility .rm-footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 850px) {
      .robotec-mobility .rm-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      .robotec-mobility .rm-feature {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 560px) {
      .robotec-mobility .rm-hero {
        padding: 42px 20px;
      }

      .robotec-mobility .rm-grid {
        grid-template-columns: 1fr;
      }

      .robotec-mobility .rm-feature {
        padding: 23px;
      }
    }
  </style>

  <div class="rm-container">

    <!-- HERO SECTION -->
    <header class="rm-hero">
      <span class="rm-label">ROBOTEC AG | SMART AGRICULTURE</span>
      <h2>Autonomous Mobility for Smarter Farming</h2>
      <p>
        ROBOTEC AG aims to advance agricultural automation through
        intelligent mobility, AI-powered navigation, smart sensors,
        and adaptable robotic platforms. Our vision is to help develop
        agricultural robots capable of moving efficiently through farm
        environments and supporting essential farming operations.
      </p>
    </header>

    <!-- INTRODUCTION -->
    <div class="rm-section">
      <h2 class="rm-heading">Redefining Agricultural Mobility</h2>
      <p class="rm-intro">
        Autonomous mobility is an important part of next-generation
        agricultural robotics. ROBOTEC AG focuses on the potential
        integration of navigation technologies, environmental sensing,
        intelligent route planning, and robotic control to support
        movement across agricultural fields, farm roads, greenhouses,
        and other farming environments. These technologies are intended
        to help reduce repetitive manual movement and support more
        efficient farm operations.
      </p>
    </div>

    <!-- CORE TECHNOLOGIES -->
    <div class="rm-section">
      <h2 class="rm-heading">Core Autonomous Mobility Technologies</h2>
      <p class="rm-intro">
        Our development vision brings together key technologies that
        could enable agricultural robots to navigate, adapt, and perform
        mobility-related tasks with greater precision.
      </p>

      <div class="rm-grid">

        <article class="rm-card">
          <div class="rm-icon">🧭</div>
          <h3>Intelligent Navigation</h3>
          <p>
            Explore navigation systems that use location data, mapped
            routes, and environmental information to guide robotic
            platforms through planned farm routes and designated work areas.
          </p>
        </article>

        <article class="rm-card">
          <div class="rm-icon">👁️</div>
          <h3>AI & Environmental Perception</h3>
          <p>
            Integrate AI and suitable sensors to interpret surrounding
            conditions, identify relevant objects, and support mobility
            decisions in changing agricultural environments.
          </p>
        </article>

        <article class="rm-card">
          <div class="rm-icon">🛡️</div>
          <h3>Obstacle Detection</h3>
          <p>
            Investigate camera-based and sensor-assisted obstacle
            detection to help robotic platforms recognize people,
            equipment, crops, and other objects along their paths.
          </p>
        </article>

        <article class="rm-card">
          <div class="rm-icon">📍</div>
          <h3>Route Planning</h3>
          <p>
            Support efficient movement by planning suitable routes
            between work locations while considering field layouts,
            access paths, and operational requirements.
          </p>
        </article>

        <article class="rm-card">
          <div class="rm-icon">🚜</div>
          <h3>Adaptive Robotic Platforms</h3>
          <p>
            Develop the concept of flexible mobility platforms designed
            for potential use with different agricultural attachments,
            tools, and field-operation modules.
          </p>
        </article>

        <article class="rm-card">
          <div class="rm-icon">📡</div>
          <h3>Connected Mobility</h3>
          <p>
            Explore connectivity for exchanging operating information,
            receiving task instructions, and supporting remote
            supervision of compatible agricultural robotic systems.
          </p>
        </article>

      </div>
    </div>

    <!-- APPLICATIONS -->
    <div class="rm-section">
      <h2 class="rm-heading">Potential Agricultural Applications</h2>
      <p class="rm-intro">
        Autonomous mobility technologies could support a range of
        agricultural activities, depending on the robot design,
        sensors, operating environment, and level of automation.
      </p>

      <div class="rm-grid">

        <article class="rm-card">
          <div class="rm-icon">🌱</div>
          <h3>Field Navigation</h3>
          <p>
            Help agricultural robots travel along designated crop rows
            and field routes for compatible farming tasks.
          </p>
        </article>

        <article class="rm-card">
          <div class="rm-icon">📦</div>
          <h3>Farm Material Transport</h3>
          <p>
            Support the movement of seeds, tools, harvested produce,
            and other farm materials between designated locations.
          </p>
        </article>

        <article class="rm-card">
          <div class="rm-icon">🧰</div>
          <h3>Mobile Work Platforms</h3>
          <p>
            Provide a potential mobility base for robotic equipment
            intended to assist with inspection, monitoring, and
            selected repetitive field operations.
          </p>
        </article>

        <article class="rm-card">
          <div class="rm-icon">🏡</div>
          <h3>Greenhouse Mobility</h3>
          <p>
            Explore navigation in structured growing environments
            where space, pathways, plants, and operating conditions
            require careful movement.
          </p>
        </article>

        <article class="rm-card">
          <div class="rm-icon">🛰️</div>
          <h3>Remote Supervision</h3>
          <p>
            Enable potential monitoring of a robot's operating status
            and location through compatible connected systems.
          </p>
        </article>

        <article class="rm-card">
          <div class="rm-icon">🤖</div>
          <h3>Robotic Task Coordination</h3>
          <p>
            Explore coordination between compatible robotic units
            to organize tasks and movement across suitable farm areas.
          </p>
        </article>

      </div>
    </div>

    <!-- DEVELOPMENT APPROACH -->
    <div class="rm-section">
      <h2 class="rm-heading">Designed Around Practical Farm Needs</h2>

      <div class="rm-feature">
        <div>
          <h3>Intelligent Mobility Framework</h3>
          <p>
            ROBOTEC AG's vision is to combine robotics, AI, sensing,
            and control technologies in a flexible framework that can
            be adapted to different agricultural needs. Mobility
            requirements may vary according to terrain, crop spacing,
            weather, payload, battery capacity, and the task being
            performed.
          </p>
          <p>
            Development and validation would be essential to establish
            reliable performance in real farm conditions.
          </p>
        </div>

        <div>
          <h3>Key Development Priorities</h3>
          <ul class="rm-list">
            <li>Reliable movement and steering control</li>
            <li>Environmental sensing and obstacle awareness</li>
            <li>Route planning suited to agricultural layouts</li>
            <li>Adaptability to different farm tasks</li>
            <li>Battery and energy-use considerations</li>
            <li>Human supervision and emergency stopping</li>
            <li>Testing across relevant terrain and conditions</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- BENEFITS -->
    <div class="rm-section">
      <h2 class="rm-heading">Potential Benefits for Agriculture</h2>

      <div class="rm-grid">
        <article class="rm-card">
          <h3>Operational Efficiency</h3>
          <p>
            Autonomous mobility could help reduce time spent on
            repetitive transportation and movement-related tasks.
          </p>
        </article>

        <article class="rm-card">
          <h3>Precision & Consistency</h3>
          <p>
            Planned routes and suitable sensing systems may support
            more repeatable movement during compatible farm operations.
          </p>
        </article>

        <article class="rm-card">
          <h3>Flexible Automation</h3>
          <p>
            Modular robotic platforms could support different tools
            and tasks as agricultural automation needs evolve.
          </p>
        </article>

        <article class="rm-card">
          <h3>Reduced Repetitive Work</h3>
          <p>
            Appropriate robotic solutions may assist farm workers
            with selected repetitive mobility and transport activities.
          </p>
        </article>

        <article class="rm-card">
          <h3>Data-Informed Operations</h3>
          <p>
            Connected systems could provide useful operational
            information to support planning and remote supervision.
          </p>
        </article>

        <article class="rm-card">
          <h3>Scalable Technology</h3>
          <p>
            A flexible design approach may allow mobility solutions
            to be adapted for different farm sizes and operating needs.
          </p>
        </article>
      </div>
    </div>

    <!-- VISION -->
    <div class="rm-section rm-vision">
      <h3>ROBOTEC AG: Moving Agriculture Forward</h3>
      <p>
        Our vision is to contribute to a future where intelligent
        agricultural robots can navigate farm environments, assist
        with essential operations, and work alongside people.
        By exploring autonomous mobility, AI, modular robotics,
        and connected technologies, ROBOTEC AG aims to support
        a more efficient, adaptable, and technology-driven
        agricultural ecosystem.
      </p>
    </div>

    <!-- FOOTER -->
    <footer class="rm-footer">
      <strong>ROBOTEC AG</strong> — Powering the Future of Smart Farming
      <br>
      <a href="https://www.robotecag.com/airobotec">
        Explore ROBOTEC AG Robotics
      </a>
    </footer>

  </div>
</section>

<?php include "footer.php";?>  