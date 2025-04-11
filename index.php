<?php
  // Start of PHP section
  $title = "About Dan";
  $description = "I'm currently a 3rd year BSIT student exploring the balance between code, creativity, and meaning.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $title; ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    body {
      margin: 0;
      font-family: 'Rubik', sans-serif;
      background-color: #2c2f33;
      color: white;
      padding: 2rem;
    }

    header {
      text-align: center;
      padding-bottom: 2rem;
    }

    h1 {
      font-size: 3rem;
      color: #7289da;
    }

    section {
      max-width: 800px;
      margin: auto;
      background-color: #23272a;
      border-radius: 10px;
      padding: 2rem;
      box-shadow: 0 0 10px rgba(0,0,0,0.4);
      margin-bottom: 2rem;
    }

    p {
      font-size: 1.2rem;
      line-height: 1.6;
    }

    .highlight {
      color: #99aab5;
    }

    .icon {
      margin-right: 8px;
      color: #7289da;
    }

    h2 {
      color: #ffffff;
      border-bottom: 1px solid #7289da;
      padding-bottom: 0.5rem;
    }
  </style>
</head>
<body>
  <header>
    <h1><i class="fas fa-user-circle icon"></i>Hey there, I'm Dan!</h1>
  </header>

  <section>
    <h2><i class="fas fa-book-reader icon"></i>About Me</h2>
    <p><?php echo $description; ?></p>
    <p>I’ve worked on cool projects like <span class="highlight">Transactia</span>, a platform for trading and bartering, and <span class="highlight">Bataan Access</span>, an app that helps Persons with Disabilities find job opportunities and safe routes with the help of guardians and employers.</p>
    <p>I’m also part of <span class="highlight">Code:Creatives (C:C)</span>—an org made for artists, by artists. We bring together passionate minds and let creativity lead the way.</p>
  </section>

  <section>
    <h2><i class="fas fa-mug-hot icon"></i>Passions</h2>
    <p>I’m big on making things—from art to coffee. Pour-over brewing’s my go-to (Julius got me into it), and I’ve grown to appreciate the flavor and patience it takes. I’m also starting to think about sharing my digital art with the world, even overseas.</p>
  </section>

  <section>
    <h2><i class="fas fa-heart icon"></i>Julius</h2>
    <p>Julius is someone really special to me. He works hard—graveyard shift kind of hard—and still makes time for the little things, like grinding coffee beans for me to enjoy at home. He’s thoughtful, dependable, and has helped me see the beauty in everyday things like tea, quiet mornings, and just being present.</p>
  </section>

  <section>
    <h2><i class="fas fa-users icon"></i>Friends</h2>
    <p>I’ve got some amazing people around me who’ve made my college life worthwhile—</p>
    <ul>
      <li><span class="icon"><i class="fas fa-star"></i></span><strong>Arlyn</strong>: thoughtful and supportive, always ready to listen or help when things get rough.</li>
      <li><span class="icon"><i class="fas fa-star"></i></span><strong>Tejedo</strong>: the kind of person who knows how to keep things grounded and real—solid energy.</li>
      <li><span class="icon"><i class="fas fa-star"></i></span><strong>Chan</strong>: adds just the right amount of spark to everything. Funny, creative, and always a vibe.</li>
    </ul>
    <p>Together, they’re like anchors in my storm, and I’m grateful for every moment with them.</p>
  </section>
</body>
</html>
