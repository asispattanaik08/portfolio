<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Personal Portfolio Website</title>
  <link rel="stylesheet" href="css/style.css">

<!-- contact section design -->
  <section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span></h2>
    <form action="conn.php" method="POST">
  <div class="input-box">
    <input type="text" name="fullname" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
  </div>
  <div class="input-box">
    <input type="number" name="mobile" placeholder="Mobile Number" required>
    <input type="text" name="subject" placeholder="Email Subject" required>
  </div>
  <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
  <input type="submit" value="Send Message" class="btn">
</form>

    </form>
  </section>
</body>
  