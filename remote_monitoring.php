<?php include "header.php";?>

<section class="robotec-monitoring">

    <style>
        .robotec-monitoring {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f8f5;
            color: #28382d;
            padding: 60px 20px;
            line-height: 1.7;
        }

        .robotec-monitoring * {
            box-sizing: border-box;
        }

        .rm-container {
            max-width: 1150px;
            margin: auto;
        }

        .rm-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .rm-label {
            display: inline-block;
            background: #e1f4e5;
            color: #16813d;
            padding: 7px 16px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1.2px;
        }

        .rm-header h1 {
            color: #173d27;
            font-size: clamp(30px, 5vw, 46px);
            line-height: 1.2;
            margin: 20px 0;
        }

        .rm-header h1 span {
            color: #28a451;
        }

        .rm-intro {
            max-width: 850px;
            margin: auto;
            color: #5b695f;
            font-size: 17px;
        }

        .rm-banner {
            background: linear-gradient(135deg, #123d27, #20834a);
            color: #fff;
            padding: 38px;
            border-radius: 18px;
            margin-bottom: 45px;
        }

        .rm-banner h2 {
            font-size: 28px;
            margin-top: 0;
        }

        .rm-banner p {
            color: #e5f4e8;
            margin-bottom: 0;
        }

        .rm-heading {
            text-align: center;
            color: #173d27;
            font-size: 30px;
            margin: 35px 0 28px;
        }

        .rm-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .rm-card {
            background: #fff;
            border: 1px solid #e1e9e2;
            padding: 26px;
            border-radius: 15px;
            transition: transform .25s, box-shadow .25s;
        }

        .rm-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(20, 65, 35, .10);
        }

        .rm-icon {
            width: 54px;
            height: 54px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e7f5e9;
            border-radius: 13px;
            font-size: 28px;
            margin-bottom: 17px;
        }

        .rm-card h3 {
            color: #19713a;
            font-size: 19px;
            margin: 0 0 10px;
        }

        .rm-card p {
            color: #617067;
            font-size: 15px;
            margin: 0;
        }

        .rm-benefits {
            margin-top: 45px;
            padding: 32px;
            border: 1px solid #e1e9e2;
            border-radius: 16px;
            background: #fff;
        }

        .rm-benefits h2 {
            color: #173d27;
            font-size: 27px;
            margin-top: 0;
        }

        .rm-benefits ul {
            padding-left: 22px;
            margin-bottom: 0;
        }

        .rm-benefits li {
            color: #526257;
            margin-bottom: 10px;
        }

        .rm-vision {
            margin-top: 28px;
            padding: 32px;
            background: #e9f5ec;
            border-left: 5px solid #28a451;
            border-radius: 12px;
        }

        .rm-vision h2 {
            color: #173d27;
            margin-top: 0;
        }

        .rm-vision p {
            color: #526257;
            margin-bottom: 0;
        }

        .rm-footer {
            text-align: center;
            margin-top: 35px;
            padding-top: 30px;
            border-top: 1px solid #dce6dd;
        }

        .rm-footer h3 {
            color: #16813d;
            font-size: 23px;
            margin-bottom: 5px;
        }

        .rm-footer p {
            color: #657268;
            margin: 5px 0;
        }

        .rm-footer a {
            color: #16813d;
            font-weight: bold;
            text-decoration: none;
        }

        @media (max-width: 850px) {
            .rm-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 560px) {
            .robotec-monitoring {
                padding: 40px 15px;
            }

            .rm-grid {
                grid-template-columns: 1fr;
            }

            .rm-banner,
            .rm-benefits,
            .rm-vision {
                padding: 24px;
            }
        }
    </style>

    <div class="rm-container">

        <header class="rm-header">
            <span class="rm-label">
                ROBOTEC AG | SMART AGRICULTURE
            </span>

            <h1>
                Remote <span>Monitoring</span>
            </h1>

            <p class="rm-intro">
                ROBOTEC AG aims to advance smart agriculture through
                connected sensors, Internet of Things (IoT) technology,
                artificial intelligence, and intelligent monitoring
                systems designed to help farmers observe field
                conditions and agricultural operations remotely.
            </p>
        </header>

        <div class="rm-banner">
            <h2>Smarter Farming Through Connected Intelligence</h2>

            <p>
                Our vision is to help farmers access relevant
                agricultural information from a distance. By integrating
                sensor networks, digital dashboards, AI-driven analytics,
                and connected robotic systems, ROBOTEC AG aims to
                support informed decisions, improve operational
                visibility, and simplify modern farm management.
            </p>
        </div>

        <h2 class="rm-heading">
            Key Technologies & Applications
        </h2>

        <div class="rm-grid">

            <article class="rm-card">
                <div class="rm-icon">🌱</div>
                <h3>Crop Monitoring</h3>
                <p>
                    Monitor crop development, field conditions,
                    and potential changes using suitable sensors
                    and connected agricultural technologies.
                </p>
            </article>

            <article class="rm-card">
                <div class="rm-icon">🌡️</div>
                <h3>Soil & Weather Monitoring</h3>
                <p>
                    Collect data on soil moisture, temperature,
                    humidity, and relevant environmental conditions
                    to support agricultural planning.
                </p>
            </article>

            <article class="rm-card">
                <div class="rm-icon">🤖</div>
                <h3>Robotic Fleet Monitoring</h3>
                <p>
                    Support remote observation of connected
                    agricultural robots, operational status,
                    task progress, and available system information.
                </p>
            </article>

            <article class="rm-card">
                <div class="rm-icon">💧</div>
                <h3>Smart Irrigation Monitoring</h3>
                <p>
                    Track soil moisture and irrigation system
                    conditions to help farmers make informed
                    water-management decisions.
                </p>
            </article>

            <article class="rm-card">
                <div class="rm-icon">⚙️</div>
                <h3>Equipment Monitoring</h3>
                <p>
                    Monitor supported machinery parameters and
                    equipment status to help identify potential
                    maintenance needs.
                </p>
            </article>

            <article class="rm-card">
                <div class="rm-icon">📊</div>
                <h3>Remote Farm Management</h3>
                <p>
                    Access agricultural information through
                    connected dashboards and digital platforms
                    to support convenient farm supervision.
                </p>
            </article>

        </div>

        <div class="rm-benefits">
            <h2>Potential Benefits</h2>

            <ul>
                <li>Improve visibility into crop and field conditions.</li>
                <li>Support faster, data-informed farming decisions.</li>
                <li>Reduce the need for frequent manual inspections in suitable applications.</li>
                <li>Support efficient irrigation and resource management.</li>
                <li>Improve awareness of connected robotic and equipment status.</li>
                <li>Help coordinate modern agricultural operations.</li>
            </ul>
        </div>

        <div class="rm-vision">
            <h2>Our Vision for the Future</h2>

            <p>
                ROBOTEC AG envisions a future where farmers can
                observe and manage agricultural activities through
                connected, intelligent technologies. By bringing
                together remote sensing, robotics, AI, and smart
                farming solutions, we aim to support efficient
                farm management, better operational awareness,
                and sustainable agricultural practices.
            </p>
        </div>

        <footer class="rm-footer">
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