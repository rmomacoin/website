<?php include "header.php";?>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        .robotec-section {
            padding: 65px 20px;
        }

        .robotec-container {
            max-width: 1150px;
            margin: auto;
        }

        .robotec-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .robotec-label {
            display: inline-block;
            color: #16803c;
            background: #e3f5e8;
            padding: 7px 16px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .robotec-header h1 {
            font-size: clamp(30px, 5vw, 46px);
            line-height: 1.2;
            color: #173d27;
            margin-bottom: 20px;
        }

        .robotec-header h1 span {
            color: #24a148;
        }

        .robotec-intro {
            max-width: 850px;
            margin: auto;
            font-size: 17px;
            color: #59665d;
        }

        .robotec-banner {
            background: linear-gradient(135deg, #123b27, #167440);
            color: #ffffff;
            padding: 38px;
            border-radius: 18px;
            margin-bottom: 45px;
        }

        .robotec-banner h2 {
            font-size: 27px;
            margin-bottom: 15px;
        }

        .robotec-banner p {
            color: #e4f4e8;
            font-size: 16px;
        }

        .robotec-heading {
            text-align: center;
            font-size: 30px;
            color: #173d27;
            margin-bottom: 28px;
        }

        .robotec-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .robotec-card {
            background: #ffffff;
            border: 1px solid #e1e9e2;
            border-radius: 14px;
            padding: 26px;
            transition: transform 0.25s, box-shadow 0.25s;
        }

        .robotec-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(20, 65, 35, 0.10);
        }

        .robotec-icon {
            width: 52px;
            height: 52px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e8f6eb;
            border-radius: 12px;
            font-size: 27px;
            margin-bottom: 17px;
        }

        .robotec-card h3 {
            font-size: 19px;
            color: #1b6033;
            margin-bottom: 10px;
        }

        .robotec-card p {
            font-size: 15px;
            color: #647067;
        }

        .robotec-vision {
            margin-top: 45px;
            padding: 35px;
            background: #eaf5ec;
            border-left: 5px solid #24a148;
            border-radius: 12px;
        }

        .robotec-vision h2 {
            color: #173d27;
            font-size: 27px;
            margin-bottom: 12px;
        }

        .robotec-vision p {
            color: #526257;
        }

        .robotec-footer {
            text-align: center;
            margin-top: 35px;
            padding-top: 25px;
            border-top: 1px solid #dce6dd;
        }

        .robotec-footer h3 {
            color: #167440;
            font-size: 21px;
            margin-bottom: 8px;
        }

        .robotec-footer p {
            font-size: 14px;
            color: #68756b;
        }

        @media (max-width: 850px) {
            .robotec-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 550px) {
            .robotec-section {
                padding: 40px 15px;
            }

            .robotec-grid {
                grid-template-columns: 1fr;
            }

            .robotec-banner {
                padding: 25px;
            }

            .robotec-vision {
                padding: 25px;
            }
        }
</style>
<section class="robotec-section">
    <div class="robotec-container">

        <header class="robotec-header">
            <span class="robotec-label">ROBOTEC AG | SMART AGRICULTURE</span>

            <h1>
                Modular <span>Agricultural Robotics</span>
            </h1>

            <p class="robotec-intro">
                ROBOTEC AG is focused on advancing modern agriculture
                through modular robotic systems, artificial intelligence,
                intelligent automation, and innovative smart farming
                technologies.
            </p>
        </header>

        <div class="robotec-banner">
            <h2>Redefining the Future of Farming</h2>
            <p>
                Our vision is to develop adaptable agricultural robots
                designed to support farmers with repetitive and
                labor-intensive tasks. By combining robotics, AI,
                sensors, and modular equipment, ROBOTEC AG aims to
                improve operational efficiency and support more
                sustainable agricultural practices.
            </p>
        </div>

        <h2 class="robotec-heading">Key Technologies & Applications</h2>

        <div class="robotec-grid">

            <article class="robotec-card">
                <div class="robotec-icon">🤖</div>
                <h3>Modular Robot Platforms</h3>
                <p>
                    Adaptable robotic platforms designed to accommodate
                    different agricultural tools, attachments, and
                    task-specific configurations.
                </p>
            </article>

            <article class="robotec-card">
                <div class="robotec-icon">🧠</div>
                <h3>AI & Intelligent Automation</h3>
                <p>
                    AI-driven concepts for intelligent decision-making,
                    task planning, environmental analysis, and automated
                    agricultural workflows.
                </p>
            </article>

            <article class="robotec-card">
                <div class="robotec-icon">🌱</div>
                <h3>Precision Farming</h3>
                <p>
                    Sensor-assisted crop monitoring and data-driven
                    agricultural operations to support targeted
                    interventions and informed farming decisions.
                </p>
            </article>

            <article class="robotec-card">
                <div class="robotec-icon">🦾</div>
                <h3>Robotic Manipulators</h3>
                <p>
                    Robotic arms and manipulation systems designed
                    for potential agricultural applications such as
                    handling, positioning, and task-specific operations.
                </p>
            </article>

            <article class="robotec-card">
                <div class="robotec-icon">🚜</div>
                <h3>Automated Field Operations</h3>
                <p>
                    Robotics solutions aimed at assisting with
                    repetitive field activities and helping address
                    agricultural labor challenges.
                </p>
            </article>

            <article class="robotec-card">
                <div class="robotec-icon">♻️</div>
                <h3>Sustainable Agriculture</h3>
                <p>
                    Technology designed to support efficient resource
                    utilization, improve operational consistency,
                    and contribute to sustainable farming practices.
                </p>
            </article>

        </div>

        <div class="robotec-vision">
            <h2>Our Vision</h2>
            <p>
                ROBOTEC AG envisions a future where intelligent
                agricultural robots work alongside farmers to help
                address labor shortages, improve farm operations,
                and support efficient food production. Through
                continued innovation in modular robotics, AI, and
                smart agriculture, we aim to contribute to the next
                generation of farming technology.
            </p>
        </div>

        <footer class="robotec-footer">
            <h3>ROBOTEC AG</h3>
            <p>
                Powering the Future of Smart Farming with Robotics and AI.
            </p>
            <p>
                <a href="https://www.robotecag.com/"
                   style="color:#16803c;text-decoration:none;">
                    www.robotecag.com
                </a>
            </p>
        </footer>

    </div>
</section>
<?php include "footer.php";?>  