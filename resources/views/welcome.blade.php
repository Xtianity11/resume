<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online resume</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>{{ $info->name }}</h1>
        <p>IT Student</p>
    </header>
    <section id="about">
        <h2>About Me</h2>
        <p>{{ $info->about }}</p>
    </section>
    <section id="hobbies">
        <h2>Hobbies</h2>
            <ul>
                <li>{{ $info->hobby_1 }}</li>
                <li>{{ $info->hobby_2 }}</li>
                
    </section>
    <section id="Education">
        <h2>Education</h2>
        <h3>College</h3>
        <ul>
          <li>
              <p>{{ $info->college }}</p>
          </li>
        </ul>
        <h3>Senior High SChool</h3>
        <ul>
          <li>
              <p>{{ $info->shs }}</p>
          </li>
        </ul>
        <h3>Junior High School</h3>
        <ul>
          <li>
              <p>{{ $info->jhs }}</p>
          </li>
        </ul>
        <h3>Elementary School</h3>
        <ul>
          <li>
              <p>{{ $info->elem }}</p>
          </li>
        </ul>
    </section>
    <footer>
        <h2>Email Address, Contact & Address </h2>
        <p>Email: {{ $info->email }}</p>
        <p>Contact Number: {{ $info->number }}</p>
		<p>Address: {{ $info->address }}</p>
    </footer>
</body>
</html>
