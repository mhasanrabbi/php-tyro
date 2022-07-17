<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Resume</title>
</head>

<body>
    <?php
    require_once "data.php";
    ?>
    <header>
        <div>
            <h1>
                <?php echo $person['basic_info']['name'] ?? ''; ?>
            </h1>
            <p>
                <?php echo $person['basic_info']['address'] ?? ''; ?>
            </p>
            <p>
                Email:
                <a href="mailto:mdmahmudhasanrabbi@gmail.com">
                    <?php echo $person['basic_info']['email'] ?? '' ?>
                </a>
            </p>
            <p>Mobile:
                <?php echo $person['basic_info']['mobile'] ?? '' ?>
            </p>
        </div>
        <?php echo '<img src="' . $person['basic_info']['img'] . '" alt="profile" height="130" width="150" />' ?? ''; ?>
    </header>
    <main>
        <!-- Career Objective -->
        <section class="career">
            <h3>Career Objective</h3>
            <hr />
            <p>
                Hard-working individual with proficiency in HTML, JavaScript, and CSS,
                possessing a strong willingness to learn about entrepreneurship and
                business and become fullstack web developer.
            </p>
        </section>
        <!-- Career Objective -->
        <br />
        <!-- Present Status -->
        <section class="present__status">
            <h3>Present Status</h3>
            <hr />
            <p>
                Learning backend web development as well as practicing frontend web
                development.
            </p>
        </section>
        <!-- Present Status -->
        <br />
        <!-- Education -->
        <?php
        if (isset($person['educational_info'])) :
        ?>
        <section class="education">
            <h3>Education</h3>
            <hr />
            <table style="width: 100%">
                <tr align="center">

                    <?php
                        if (isset($person['th_label'])) {
                            foreach ($person['th_label'] as $label) {
                                echo '<th>' . $label['exam'] . '</th>';
                                echo '<th>' . $label['board'] . '</th>';
                                echo '<th>' . $label['group'] . '</th>';
                                echo '<th>' . $label['result'] . '</th>';
                                echo '<th>' . $label['institute'] . '</th>';
                                echo '<th>' . $label['passing_year'] . '</th>';
                            }
                        }

                        ?>
                </tr>
                <?php if (count($person['educational_info']) > 0) {
                            foreach ($person['educational_info'] as $edu) {
                                echo '<tr align="center">';
                                foreach ($edu as $key => $value) {
                                    echo '<td>' . $value . '</td>';
                                }
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr align="center"><td colspan="6">No Data Found</td></tr>';
                        }

                    ?>

            </table>
        </section>
        <?php endif; ?>
        <!-- Education -->
        <br />
        <!--Computer Skills  -->
        <section class="computer__skills">
            <h3>Computer Skills</h3>
            <hr />
            <br />
            <p>Programming Languages: JavaScript</p>
            <p>Web based skills: HTML/CSS/Resoponsive Design, Bootstrap</p>
            <p>Scripting skills: JavaScript</p>
            <p>Development tools: Git, Github, VSCode</p>
        </section>
        <br />
        <!--Projects -->
        <section class="projects">
            <h3>Projects</h3>
            <hr />
            <dl>
                <dt>
                    <a href="https://mahmudfeedbackui.netlify.app" target="_blank">Feedback App</a>
                </dt>
                <dd>
                    - Can perform create, read, update, delete actions using react js
                </dd>
                <dt>
                    <a href="https://restcountriesapi-react.netlify.app/" target="_blank">Rest Countries</a>
                </dt>
                <dd>
                    - See all countries from the API on the homepage, search country by
                    name, filter country by region.
                </dd>
                <dt>
                    <a href="https://mhasanrabbi.github.io/Omnifood/" target="_blank">Omnifood</a>
                </dt>
                <dd>- Resoponsive website landing using css flex, css grid.</dd>
            </dl>
        </section>
        <!-- Languages -->
        <section class="languages">
            <h3>Languages</h3>
            <hr />
            <ul>
                <?php
                if (isset($person['languages'])) {
                    foreach ($person['languages'] as $lang) {
                        echo '<li>' . $lang . '</li>';
                    }
                } else {
                    echo '<li>No Languages</li>';
                }
                ?>
            </ul>
        </section>
        <!-- Personal Information -->
        <!-- Hobbies -->
        <?php
        if (isset($person['hobbies'])) :
        ?>
        <section class="hobby">
            <h3>Hobbies</h3>
            <hr />
            <ul>
                <?php
                    if (count($person['hobbies']) > 0) {
                        foreach ($person['hobbies'] as $hobby) {
                            echo '<li>' . $hobby . '</li>';
                        }
                    } else {
                        echo '<li>No Hobbies</li>';
                    }
                    ?>
            </ul>
        </section>
        <?php endif; ?>
        <!-- Games -->
        <?php
        if (isset($person['games'])) :
        ?>
        <section class="games">
            <h3>Games</h3>
            <hr />
            <ul>
                <?php
                    if (count($person['games']) > 0) {
                        foreach ($person['games'] as $game) {
                            // var_dump($game);
                            echo '<li>' . $game . '</li>';
                        }
                    } else {
                        echo '<li>No Games</li>';
                    }
                    ?>
            </ul>
        </section>
        <?php endif; ?>
    </main>
    <br />
    <footer>
        <p>
            Copyright &copy; Md Mahmud Hasan Rabbi,<span><?php echo date('Y') ?></span>
        </p>
    </footer>
</body>

</html>