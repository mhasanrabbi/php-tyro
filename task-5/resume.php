<?php

$person = [
    'basic_info' => [
        'name' => 'Md Mahmud Hasan Rabbi',
        'address' => 'North Mugda, Sabujbagh, Basabo, Dhaka-1214',
        'email' => 'mdmahmudhasanrabbi@gmail.com',
        'mobile' => '+8801323570067'
    ],
    [
        'label' => [
            'exam' => 'Exam',
            'board' => 'Board',
            'group' => 'Group',
            'result' => 'Result',
            'institute' => 'Institute',
            'passing_year' => 'Passing Year',
        ]
    ],
    [
        'educational_info' =>
        [
            [
                'exam' => 'BBA',
                'board' => 'National University, Bangladesh',
                'group' => 'Finance and Banking',
                'result' => 'N/A',
                'institute' => 'National University, Bangladesh',
                'passing_year' => '2018-Present'
            ],
            [
                'exam' => 'HSC',
                'board' => 'Dhaka',
                'group' => 'Science',
                'result' => 'A',
                'institute' => 'Dhaka College',
                'passing_year' => '2017'
            ],
            [
                'exam' => 'SSC',
                'board' => 'Dhaka',
                'group' => 'Science',
                'result' => 'A+',
                'institute' => 'Motijheel Govt. Boys High School',
                'passing_year' => '2015'
            ]
        ]
    ]
];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Resume</title>
</head>



<body>
    <header>
        <div>
            <h1>
                <?php
                echo $person['basic_info']['name'];
                ?>
            </h1>
            <p>
                <?php echo $person['basic_info']['address']; ?>
            </p>
            <p>
                Email:
                <a href="mailto:mdmahmudhasanrabbi@gmail.com">
                    <?php echo $person['basic_info']['name'] ?>
                </a>
            </p>
            <p>Mobile: <?php echo $person['basic_info']['mobile'] ?></p>
        </div>
        <!-- <img class="cv__img" src="image.JPG" alt="Md Mahmud Hasan Rabbi" /> -->
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
        <section class="education">
            <h3>Education</h3>
            <hr />
            <table style="width: 100%">
                <tr align="center">
                    <!-- <th style="width: 15%">Exam</th>
                    <th style="width: 25%">Board/University</th>
                    <th>group</th>
                    <th>Name of Institution</th>
                    <th>GPA</th>
                    <th>Year</th> -->
                    <?php
                    foreach ($person as $p) {
                        foreach ($p as $key => $value) {
                            if (is_array($value) && $key == 'label') {
                                foreach ($value as $key => $value) {
                                    // var_dump($value);
                                    echo "<th>$value</th>";
                                }
                            }
                        }
                    }
                    ?>
                </tr>
                <?php
                foreach ($person as $p) {
                    foreach ($p as $key => $value) {
                        if (is_array($value) && $key == 'educational_info') {
                            foreach ($value as $v) {
                                // var_dump($v);
                                echo '<tr align="center">';
                                echo '<td>' . $v['exam'] . '</td>';
                                echo '<td>' . $v['board'] . '</td>';
                                echo '<td>' . $v['group'] . '</td>';
                                echo '<td>' . $v['result'] . '</td>';
                                echo '<td>' . $v['institute'] . '</td>';
                                echo '<td>' . $v['passing_year'] . '</td>';
                                echo '</tr>';
                            }
                        }
                    }
                }
                ?>
                <!-- <tr align="center">
                    <td>BBA</td>
                    <td>National University, Bangladesh</td>
                    <td>2018 - Present</td>
                    <td>Habibullah Bahar College</td>
                    <td>N/A</td>
                </tr>
                <tr align="center">
                    <td>HSC</td>
                    <td>Dhaka</td>
                    <td>2017</td>
                    <td>Dhaka College</td>
                    <td>4.58/5.00</td>
                </tr>
                <tr align="center">
                    <td>SSC</td>
                    <td>Dhaka</td>
                    <td>2015</td>
                    <td>Motijheel Govt Boy's High School</td>
                    <td>5.00/5.00</td>
                </tr> -->
            </table>
        </section>
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
                <li>English</li>
                <li>Bangla</li>
            </ul>
        </section>

        <!-- Personal Information -->

        <!-- Hobbies -->
        <section class="hobby">
            <h3>Hobbies</h3>
            <hr />
            <ul>
                <li>Reading Books</li>
                <li>Watch Movies</li>
                <li>Playing sports</li>
            </ul>
        </section>
        <!-- Games -->
        <section class="games">
            <h3>Games</h3>
            <hr />
            <ul>
                <li>Cricket</li>
                <li>Football</li>
                <li>Video Games</li>
            </ul>
        </section>
    </main>
    <br />
    <footer>
        <p>
            Copyright &copy; Md Mahmud Hasan Rabbi,<span id="year">
                <script>
                document
                    .getElementById('year')
                    .appendChild(document.createTextNode(new Date().getFullYear()));
                </script>
            </span>
        </p>
    </footer>
</body>

</html>