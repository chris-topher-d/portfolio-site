<?php
  // Message vars
  $msg = '';
  $msgClass = '';

  // Check for submit
  if (filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check required fields
    if (!empty($email) && !empty($name) && !empty($message)) {
      // Passed
      // Check Email
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        // Failed
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      } else {
        // Passed
        // Recipient Email
        $toEmail = 'cdennis.aus@gmail.com';
        $subject = 'Contact request from '.$name;
        $body = '<h2>Contact Request</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>';
        // Email Headers
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
        // Additional Headers
        $headers .= "From: " .$name. "<".$email.">"."\r\n";

        if (mail($toEmail, $subject, $body, $headers)) {
          // Email Sent
          $msg = 'Your message has been sent';
          $msgClass = 'alert-danger';
        } else {
          // Failed
          $msg = 'Your email was not sent';
          $msgClass = 'alert-danger';
        }
      }
    } else {
      // Failed
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=800'>
  <title>Christopher Dennis</title>
  <link rel="shortcut icon" href="./favicon_c.png">
  <link rel='stylesheet' href='css/main.css'>
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
  <script type="text/javascript" src='scripts/main.js'></script>
</head>

<body>
  <header>
    <div class='header-container'>
      <div id='info'><h3 id='name'>CHRISTOPHER DENNIS</h3><p id='title'>Front End Developer</p></div>
      <nav>
        <li><a href='#portfolio' class='scroll'>PORTFOLIO</a></li>
        <li><a href='#about' class='scroll'>ABOUT</a></li>
        <li><a href='#contact' class='scroll'>CONTACT</a></li>
      </nav>
    </div>
  </header>

  <section class='home'>
    <div id='poly-head'>
      <img src='img/headshot_poly.png' alt='poly-headshot' style='height: 215px; width: 215px;'>
    </div>
    <div id='statement'>
      <div id='text'>
        <p>Hello, my name is Christopher.</p>
        <div id='blurb'>
          <p>I'm a front-end developer who enjoys building</p>
          <p>and solving problems with code.</p>
        </div>
        <p>Have a look at a few of my projects below.</p>
      </div>
      <a href='#portfolio' class='scroll'>
        <i class="fas fa-angle-double-down"></i>
      </a>
    </div>
  </section>

    <section id='portfolio'>
      <!-- <h3 class='title'>Portfolio</h3> -->
      <div class='skills-list'>
        <i class="devicon-html5-plain-wordmark"></i>
        <i class="devicon-css3-plain-wordmark"></i>
        <i class="devicon-javascript-plain"></i>
        <i class="devicon-sass-original"></i>
        <i class="devicon-jquery-plain-wordmark"></i>
        <i class="devicon-react-original-wordmark"></i>
        <i class="devicon-mysql-plain-wordmark"></i>
        <i class="devicon-php-plain"></i>
      </div>
      <div id='git-info'>
        <a href='https://github.com/chris-topher-d' target='_blank'>
          <img src='img/GitHub-Mark-Light-32px.png' alt='github-logo'>
          <h3 id='git-link'>Visit my GitHub</h3>
        </a>
      </div>

      <div class='projects'>
        <div class='block'>
          <a href='http://christopherdennis.me/songify/' target='_blank'>
            <img src='img/songify.png' alt='songify'>
            <div class='info'>
              <h3>Songify Music Streaming</h3>
              <h4>Create an account and stream your favorite music for free</h4>
            </div>
          </a>
          <p>HTML5 | CSS3 | SASS | JavaScript | jQuery | MySQL | PHP</p>
        </div>
        <div class='block'>
          <a href='http://christopherdennis.me/weather-app/' target='_blank'>
            <img src='img/weather-app.png' alt='weather-app'>
            <div class='info'>
              <h3>React Weather Station</h3>
              <h4>View current weather conditions and a five day forecast</h4>
            </div>
          </a>
          <p>HTML5 | CSS3 | Flexbox | SASS | React | API</p>
        </div>
        <div class='block'>
          <a href='http://christopherdennis.me/twitch-app/' target='_blank'>
            <img src='img/twitch.png' alt='twitch-app'>
            <div class='info'>
              <h3>Twitch Streamers</h3>
              <h4>Keep track of your favorite Twitch streamers</h4>
            </div>
          </a>
          <p>HTML5 | CSS3 | Flexbox | SASS | React | API</p>
        </div>
        <div class='block'>
          <a href='http://christopherdennis.me/quote-generator/' target='_blank'>
            <img src='img/quote.png' alt='qoute-generator'>
            <div class='info'>
              <h3>Random Quote</h3>
              <h3>Generator</h3>
              <h4>Generate a random quote and send it to your Twitter account</h4>
            </div>
          </a>
          <p>HTML5 | CSS3 | JavaScript | jQuery | API</p>
        </div>
        <div class='block'>
          <a href='http://christopherdennis.me/tic-tac-toe/' target='_blank'>
            <img src='img/tic-tac-toe.png' alt='tic-tac-toe'>
            <div class='info'>
              <h3>Tic-Tac-Toe</h3>
              <h4>The classic game powered by JavaScript</h4>
            </div>
          </a>
          <p>HTML5 | CSS3 | Flexbox | JavaScript | jQuery</p>
        </div>
        <div class='block'>
          <a href='http://christopherdennis.me/js-calc/' target='_blank'>
            <img src='img/js-calc.png' alt='js-calc'>
            <div class='info'>
              <h3>JavaScript Calculator</h3>
              <h4>A clean functional calculator</h4>
            </div>
          </a>
          <p>HTML5 | CSS3 | Flexbox | JavaScript | jQuery</p>
        </div>
      </div>
    </section>

    <section id='about'>
      <h3 class='title'>About</h3>
      <div id='about-info'>
        <p>I'm a native Austinite who enjoys learning new things and spending time outdoors. I first started learning C in 2013 as a hobby and eventually made my way to front end development with the goal of becoming a full stack developer.</p>
      </div>
    </section>

    <section id='contact'>
      <h3 class='title'>Contact</h3>
      <div class='contact-form'>
        <form method='post' action="#contact" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <label>Name:</label>
          <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
          <label>Email:</label>
          <input type="text" id="email" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
          <label>Message:</label>
          <textarea id="message" name="message" placeholder=""><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
          <button id='submit-btn' type="submit" name='submit'>SEND</button>
        </form>
        <?php if ($msg != ''): ?>
          <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
      </div>
    </section>

    <footer>
      <p>&copy;<?php echo date('Y'); ?> <span style='color: #234590'>Christopher Dennis<p>
    </footer>
  </body>
</html>
