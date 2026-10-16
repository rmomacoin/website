<?php include "header.php";?>


<section class="autonomous-farming">
    <style>
        .autonomous-farming {
            font-family: Arial, Helvetica, sans-serif;
            color: #25352b;
            background: #f6f9f6;
            padding: 60px 20px;
            line-height: 1.7;
        }

        .autonomous-farming * {
            box-sizing: border-box;
        }

        .af-container {
            max-width: 1150px;
            margin: auto;
        }

        .af-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .af-tag {
            display: inline-block;
            background: #e1f4e5;
            color: #16813d;
            padding: 7px 16px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1.2px;
        }

        .af-header h1 {
            color: #173d27;
            font-size: clamp(30px, 5vw, 46px);
            line-height: 1.2;
            margin: 20px 0;
        }

        .af-header h1 span {
            color: #28a451;
        }

        .af-intro {
            max-width: 850px;
            margin: auto;
            color: #59675e;
            font-size: 17px;
        }

        .af-banner {
            background: linear-gradient(135deg, #123d27, #20834a);
            color: #fff;
            border-radius: 18px;
            padding: 38px;
            margin-bottom: 45px;
        }

        .af-banner h2 {
            margin-top: 0;
            font-size: 28px;
        }

        .af-banner p {
            color: #e6f5e9;
            margin-bottom: 0;
        }

        .af-heading {
            text-align: center;
            color: #173d27;
            font-size: 30px;
            margin: 35px 0 28px;
        }

        .af-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .af-card {
            background: #fff;
            border: 1px solid #e1e9e2;
            padding: 26px;
            border-radius: 15px;
            transition: transform .25s, box-shadow .25s;
        }

        .af-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(20, 65, 35, .10);
        }

        .af-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 54px;
            height: 54px;
            border-radius: 13px;
            background: #e7f5e9;
            font-size: 28px;
            margin-bottom: 17px;
        }

        .af-card h3 {
            color: #19713a;
            font-size: 19px;
            margin: 0 0 10px;
        }

        .af-card p {
            color: #617067;
            font-size: 15px;
            margin: 0;
        }

        .af-benefits {
            margin-top: 45px;
            background: #fff;
            border-radius: 16px;
            padding: 32px;
            border: 1px solid #e1e9e2;
        }

        .af-benefits h2 {
            color: #173d27;
            margin-top: 0;
            font-size: 27px;
        }

        .af-benefits ul {
            padding-left: 22px;
            margin-bottom: 0;
        }

        .af-benefits li {
            margin-bottom: 10px;
            color: #526257;
        }

        .af-vision {
            background: #e9f5ec;
            border-left: 5px solid #28a451;
            padding: 32px;
            margin-top: 28px;
            border-radius: 12px;
        }

        .af-vision h2 {
            color: #173d27;
            margin-top: 0;
        }

        .af-vision p {
            color: #526257;
            margin-bottom: 0;
        }

        .af-footer {
            text-align: center;
            padding-top: 30px;
            margin-top: 35px;
            border-top: 1px solid #dce6dd;
        }

        .af-footer h3 {
            color: #16813d;
            font-size: 23px;
            margin-bottom: 5px;
        }

        .af-footer p {
            color: #657268;
            margin: 5px 0;
        }

        .af-footer a {
            color: #16813d;
            text-decoration: none;
            font-weight: bold;
        }

        @media (max-width: 850px) {
            .af-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 560px) {
            .autonomous-farming {
                padding: 40px 15px;
            }

            .af-grid {
                grid-template-columns: 1fr;
            }

            .af-banner,
            .af-benefits,
            .af-vision {
                padding: 24px;
            }
        }
    </style>

    <div class="af-container">

        <header class="af-header">
            <span class="af-tag">
                ROBOTEC AG | SMART AGRICULTURE
            </span>

            <h1>
                Autonomous <span>Farming</span>
            </h1>

            <p class="af-intro">
                ROBOTEC AG is focused on advancing modern agriculture
                through autonomous robotic systems, artificial
                intelligence, intelligent sensors, and smart farming
                technologies designed to support efficient,
                productive, and sustainable agricultural operations.
            </p>
        </header>

        <div class="af-banner">
            <h2>Transforming Agriculture Through Automation</h2>
            <p>
                Our vision is to develop intelligent agricultural
                robotics that assist farmers with repetitive,
                time-consuming, and labor-intensive tasks. By combining
                AI, machine vision, modular robotics, and sensor
                technologies, ROBOTEC AG aims to support smarter
                farming decisions and more efficient field operations.
            </p>
        </div>

        <h2 class="af-heading">Key Technologies & Applications</h2>

        <div class="af-grid">

            <article class="af-card">
                <div class="af-icon">🤖</div>
                <h3>Autonomous Field Robotics</h3>
                <p>
                    Robotic platforms designed to assist with suitable
                    field operations, navigate agricultural environments,
                    and reduce dependence on repetitive manual work.
                </p>
            </article>

            <article class="af-card">
                <div class="af-icon">🧠</div>
                <h3>AI & Machine Vision</h3>
                <p>
                    Intelligent image analysis and AI-driven systems
                    intended to help identify crop conditions, interpret
                    field information, and support farming decisions.
                </p>
            </article>

            <article class="af-card">
                <div class="af-icon">🌱</div>
                <h3>Precision Agriculture</h3>
                <p>
                    Sensor-assisted farming approaches that support
                    targeted agricultural interventions and efficient
                    management of farm resources.
                </p>
            </article>

            <article class="af-card">
                <div class="af-icon">🦾</div>
                <h3>Robotic Manipulation</h3>
                <p>
                    Modular robotic arms and specialized attachments
                    designed for potential agricultural handling,
                    positioning, and task-specific applications.
                </p>
            </article>

            <article class="af-card">
                <div class="af-icon">📡</div>
                <h3>Smart Sensors & Monitoring</h3>
                <p>
                    Sensor-based monitoring concepts to collect
                    agricultural data and support the observation
                    of crops, soil, and field conditions.
                </p>
            </article>

            <article class="af-card">
                <div class="af-icon">♻️</div>
                <h3>Sustainable Farming</h3>
                <p>
                    Technology aimed at supporting more efficient
                    resource utilization, operational consistency,
                    and environmentally conscious farming practices.
                </p>
            </article>

        </div>

        <div class="af-benefits">
            <h2>Potential Benefits of Autonomous Farming</h2>
            <ul>
                <li>Reduce repetitive manual and labor-intensive tasks.</li>
                <li>Support timely and consistent agricultural operations.</li>
                <li>Improve data-driven crop and field management.</li>
                <li>Encourage more precise use of water and farm inputs.</li>
                <li>Support adaptable robotic solutions for different farms.</li>
                <li>Contribute to modern, technology-enabled agriculture.</li>
            </ul>
        </div>

        <div class="af-vision">
            <h2>Our Vision for the Future</h2>
            <p>
                ROBOTEC AG envisions a future where intelligent
                agricultural robots work alongside farmers to address
                labor challenges, support productivity, and improve
                farm operations. Through innovation in robotics,
                artificial intelligence, modular engineering, and
                smart agriculture, we aim to contribute to the next
                generation of farming technology.
            </p>
        </div>

        <footer class="af-footer">
            <h3>ROBOTEC AG</h3>
            <p>
                Powering the Future of Smart Farming with Robotics and AI.
            </p>
            <p>
                <a href="https://www.robotecag.com/airobotec">
                    www.robotecag.com/airobotec
                </a>
            </p>
        </footer>

    </div>
</section>

<?php include "footer.php";?>  