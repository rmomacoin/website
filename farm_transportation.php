<?php include "header.php";?>


<section class="farm-transport">
    <style>
        .farm-transport {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f8f5;
            color: #28382d;
            padding: 60px 20px;
            line-height: 1.7;
        }

        .farm-transport * {
            box-sizing: border-box;
        }

        .ft-container {
            max-width: 1150px;
            margin: auto;
        }

        .ft-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .ft-label {
            display: inline-block;
            padding: 7px 16px;
            border-radius: 30px;
            background: #e1f4e5;
            color: #16813d;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1.2px;
        }

        .ft-header h1 {
            color: #173d27;
            font-size: clamp(30px, 5vw, 46px);
            line-height: 1.2;
            margin: 20px 0;
        }

        .ft-header h1 span {
            color: #28a451;
        }

        .ft-intro {
            max-width: 850px;
            margin: auto;
            font-size: 17px;
            color: #5b695f;
        }

        .ft-banner {
            padding: 38px;
            margin-bottom: 45px;
            border-radius: 18px;
            background: linear-gradient(135deg, #123d27, #20834a);
            color: #fff;
        }

        .ft-banner h2 {
            font-size: 28px;
            margin-top: 0;
        }

        .ft-banner p {
            color: #e5f4e8;
            margin-bottom: 0;
        }

        .ft-heading {
            text-align: center;
            color: #173d27;
            font-size: 30px;
            margin: 35px 0 28px;
        }

        .ft-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .ft-card {
            background: #fff;
            border: 1px solid #e1e9e2;
            padding: 26px;
            border-radius: 15px;
            transition: transform .25s, box-shadow .25s;
        }

        .ft-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(20, 65, 35, .10);
        }

        .ft-icon {
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

        .ft-card h3 {
            color: #19713a;
            font-size: 19px;
            margin: 0 0 10px;
        }

        .ft-card p {
            color: #617067;
            font-size: 15px;
            margin: 0;
        }

        .ft-benefits {
            margin-top: 45px;
            padding: 32px;
            border: 1px solid #e1e9e2;
            border-radius: 16px;
            background: #fff;
        }

        .ft-benefits h2 {
            color: #173d27;
            font-size: 27px;
            margin-top: 0;
        }

        .ft-benefits ul {
            padding-left: 22px;
            margin-bottom: 0;
        }

        .ft-benefits li {
            color: #526257;
            margin-bottom: 10px;
        }

        .ft-vision {
            margin-top: 28px;
            padding: 32px;
            border-left: 5px solid #28a451;
            border-radius: 12px;
            background: #e9f5ec;
        }

        .ft-vision h2 {
            color: #173d27;
            margin-top: 0;
        }

        .ft-vision p {
            color: #526257;
            margin-bottom: 0;
        }

        .ft-footer {
            text-align: center;
            margin-top: 35px;
            padding-top: 30px;
            border-top: 1px solid #dce6dd;
        }

        .ft-footer h3 {
            color: #16813d;
            font-size: 23px;
            margin-bottom: 5px;
        }

        .ft-footer p {
            color: #657268;
            margin: 5px 0;
        }

        .ft-footer a {
            color: #16813d;
            text-decoration: none;
            font-weight: bold;
        }

        @media (max-width: 850px) {
            .ft-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 560px) {
            .farm-transport {
                padding: 40px 15px;
            }

            .ft-grid {
                grid-template-columns: 1fr;
            }

            .ft-banner,
            .ft-benefits,
            .ft-vision {
                padding: 24px;
            }
        }
    </style>

    <div class="ft-container">

        <header class="ft-header">
            <span class="ft-label">
                ROBOTEC AG | SMART AGRICULTURE
            </span>

            <h1>
                Farm <span>Transportation</span>
            </h1>

            <p class="ft-intro">
                ROBOTEC AG aims to advance agricultural transportation
                through intelligent robotics, autonomous mobility,
                AI-driven navigation, and smart logistics technologies
                designed to support efficient movement of crops,
                farming equipment, and agricultural supplies.
            </p>
        </header>

        <div class="ft-banner">
            <h2>Smarter Transportation for Modern Farming</h2>
            <p>
                Our vision is to develop adaptable robotic transportation
                solutions that assist farmers in moving harvested crops,
                seeds, fertilizers, tools, and other materials across
                suitable farm environments. By combining artificial
                intelligence, sensors, and modular robotic platforms,
                ROBOTEC AG aims to support efficient farm logistics
                and reduce repetitive manual handling.
            </p>
        </div>

        <h2 class="ft-heading">
            Key Technologies & Applications
        </h2>

        <div class="ft-grid">

            <article class="ft-card">
                <div class="ft-icon">🚜</div>
                <h3>Autonomous Farm Transport</h3>
                <p>
                    Robotic transportation platforms designed to assist
                    with moving agricultural materials between fields,
                    collection points, and other farm locations.
                </p>
            </article>

            <article class="ft-card">
                <div class="ft-icon">🌾</div>
                <h3>Harvest Transportation</h3>
                <p>
                    Smart transport concepts intended to help move
                    harvested crops from field locations to collection,
                    handling, or storage areas.
                </p>
            </article>

            <article class="ft-card">
                <div class="ft-icon">🧠</div>
                <h3>AI-Powered Navigation</h3>
                <p>
                    Intelligent navigation concepts using sensors
                    and positioning technologies to support route
                    planning and movement in suitable environments.
                </p>
            </article>

            <article class="ft-card">
                <div class="ft-icon">📦</div>
                <h3>Smart Material Handling</h3>
                <p>
                    Transportation solutions designed to assist with
                    moving seeds, tools, fertilizers, and other
                    essential agricultural supplies.
                </p>
            </article>

            <article class="ft-card">
                <div class="ft-icon">🦾</div>
                <h3>Modular Transport Robots</h3>
                <p>
                    Adaptable robotic platforms designed to accommodate
                    different payloads, attachments, and agricultural
                    transportation requirements.
                </p>
            </article>

            <article class="ft-card">
                <div class="ft-icon">📡</div>
                <h3>Smart Farm Logistics</h3>
                <p>
                    Technology concepts that can support better
                    coordination between field operations, crop
                    collection points, and storage facilities.
                </p>
            </article>

        </div>

        <div class="ft-benefits">
            <h2>Potential Benefits</h2>

            <ul>
                <li>Reduce repetitive manual material handling.</li>
                <li>Support efficient movement of harvested crops.</li>
                <li>Improve coordination of farm transportation tasks.</li>
                <li>Assist with transporting tools and farming supplies.</li>
                <li>Support adaptable transportation across suitable farms.</li>
                <li>Encourage smarter and more resource-efficient logistics.</li>
            </ul>
        </div>

        <div class="ft-vision">
            <h2>Our Vision for the Future</h2>

            <p>
                ROBOTEC AG envisions a future where intelligent
                agricultural robots help farmers move crops and
                essential materials with greater efficiency and
                flexibility. Through innovation in autonomous mobility,
                artificial intelligence, modular robotics, and smart
                farming, we aim to contribute to a connected and
                technology-driven agricultural ecosystem.
            </p>
        </div>

        <footer class="ft-footer">
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