<?php include "header.php";?>



<section class="robotec-ai-vision">

    <style>
        .robotec-ai-vision {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f8f5;
            color: #28382d;
            padding: 60px 20px;
            line-height: 1.7;
        }

        .robotec-ai-vision * {
            box-sizing: border-box;
        }

        .rav-container {
            max-width: 1150px;
            margin: auto;
        }

        .rav-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .rav-label {
            display: inline-block;
            background: #e1f4e5;
            color: #16813d;
            padding: 7px 16px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1.2px;
        }

        .rav-header h1 {
            color: #173d27;
            font-size: clamp(30px, 5vw, 46px);
            line-height: 1.2;
            margin: 20px 0;
        }

        .rav-header h1 span {
            color: #28a451;
        }

        .rav-intro {
            max-width: 850px;
            margin: auto;
            color: #5b695f;
            font-size: 17px;
        }

        .rav-banner {
            background: linear-gradient(135deg, #123d27, #20834a);
            color: #fff;
            padding: 38px;
            border-radius: 18px;
            margin-bottom: 45px;
        }

        .rav-banner h2 {
            font-size: 28px;
            margin-top: 0;
        }

        .rav-banner p {
            color: #e5f4e8;
            margin-bottom: 0;
        }

        .rav-heading {
            text-align: center;
            color: #173d27;
            font-size: 30px;
            margin: 35px 0 28px;
        }

        .rav-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .rav-card {
            background: #fff;
            border: 1px solid #e1e9e2;
            padding: 26px;
            border-radius: 15px;
            transition: transform .25s, box-shadow .25s;
        }

        .rav-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(20, 65, 35, .10);
        }

        .rav-icon {
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

        .rav-card h3 {
            color: #19713a;
            font-size: 19px;
            margin: 0 0 10px;
        }

        .rav-card p {
            color: #617067;
            font-size: 15px;
            margin: 0;
        }

        .rav-benefits {
            margin-top: 45px;
            padding: 32px;
            border: 1px solid #e1e9e2;
            border-radius: 16px;
            background: #fff;
        }

        .rav-benefits h2 {
            color: #173d27;
            font-size: 27px;
            margin-top: 0;
        }

        .rav-benefits ul {
            padding-left: 22px;
            margin-bottom: 0;
        }

        .rav-benefits li {
            color: #526257;
            margin-bottom: 10px;
        }

        .rav-vision {
            margin-top: 28px;
            padding: 32px;
            background: #e9f5ec;
            border-left: 5px solid #28a451;
            border-radius: 12px;
        }

        .rav-vision h2 {
            color: #173d27;
            margin-top: 0;
        }

        .rav-vision p {
            color: #526257;
            margin-bottom: 0;
        }

        .rav-footer {
            text-align: center;
            margin-top: 35px;
            padding-top: 30px;
            border-top: 1px solid #dce6dd;
        }

        .rav-footer h3 {
            color: #16813d;
            font-size: 23px;
            margin-bottom: 5px;
        }

        .rav-footer p {
            color: #657268;
            margin: 5px 0;
        }

        .rav-footer a {
            color: #16813d;
            font-weight: bold;
            text-decoration: none;
        }

        @media (max-width: 850px) {
            .rav-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 560px) {
            .robotec-ai-vision {
                padding: 40px 15px;
            }

            .rav-grid {
                grid-template-columns: 1fr;
            }

            .rav-banner,
            .rav-benefits,
            .rav-vision {
                padding: 24px;
            }
        }
    </style>

    <div class="rav-container">

        <header class="rav-header">
            <span class="rav-label">
                ROBOTEC AG | SMART AGRICULTURE
            </span>

            <h1>
                AI &amp; <span>Computer Vision</span>
            </h1>

            <p class="rav-intro">
                ROBOTEC AG aims to advance smart agriculture through
                artificial intelligence, computer vision, machine
                learning, and intelligent robotic systems designed
                to analyze crops, interpret field conditions, and
                support precision farming.
            </p>
        </header>

        <div class="rav-banner">
            <h2>Giving Agricultural Robots Intelligent Vision</h2>

            <p>
                Our vision is to develop intelligent agricultural
                technologies that help robotic systems interpret
                images, recognize crops, identify weeds, and analyze
                their surroundings. By combining AI-powered image
                processing, intelligent cameras, and modular robotics,
                ROBOTEC AG aims to support smarter farming decisions
                and more precise agricultural operations.
            </p>
        </div>

        <h2 class="rav-heading">
            Key Technologies &amp; Applications
        </h2>

        <div class="rav-grid">

            <article class="rav-card">
                <div class="rav-icon">🌱</div>
                <h3>Crop Identification</h3>
                <p>
                    Apply image analysis to distinguish crops and
                    recognize relevant plant characteristics to
                    support intelligent agricultural operations.
                </p>
            </article>

            <article class="rav-card">
                <div class="rav-icon">🌿</div>
                <h3>AI Weed Detection</h3>
                <p>
                    Explore computer vision technologies to identify
                    weeds and support targeted weed-management
                    strategies in agricultural fields.
                </p>
            </article>

            <article class="rav-card">
                <div class="rav-icon">🔬</div>
                <h3>Plant Health Monitoring</h3>
                <p>
                    Analyze visible plant characteristics to help
                    identify potential signs of stress, disease,
                    or changes in crop conditions.
                </p>
            </article>

            <article class="rav-card">
                <div class="rav-icon">🎯</div>
                <h3>Precision Agriculture</h3>
                <p>
                    Use visual information and AI-driven analysis
                    to support targeted farming operations and
                    efficient agricultural resource utilization.
                </p>
            </article>

            <article class="rav-card">
                <div class="rav-icon">🤖</div>
                <h3>Autonomous Navigation</h3>
                <p>
                    Help robotic systems interpret their surroundings
                    using cameras and computer vision for navigation
                    in suitable agricultural environments.
                </p>
            </article>

            <article class="rav-card">
                <div class="rav-icon">🦾</div>
                <h3>Robotic Manipulation</h3>
                <p>
                    Support object recognition and positioning
                    for potential agricultural handling, picking,
                    and task-specific robotic applications.
                </p>
            </article>

        </div>

        <div class="rav-benefits">
            <h2>Potential Benefits</h2>

            <ul>
                <li>Support intelligent crop and field monitoring.</li>
                <li>Help identify visible crop problems and weeds.</li>
                <li>Improve precision in suitable agricultural tasks.</li>
                <li>Enhance environmental awareness for agricultural robots.</li>
                <li>Support data-driven farming decisions.</li>
                <li>Help reduce unnecessary resource use and repetitive inspections.</li>
            </ul>
        </div>

        <div class="rav-vision">
            <h2>Our Vision for the Future</h2>

            <p>
                ROBOTEC AG envisions a future where AI-powered
                agricultural robots can see, interpret, and respond
                to changing field conditions. Through innovation
                in computer vision, machine learning, modular
                robotics, and precision agriculture, we aim to
                contribute to a smarter, more efficient, and
                sustainable agricultural ecosystem.
            </p>
        </div>

        <footer class="rav-footer">
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