<!DOCTYPE html>
<html>
<head>
  <title>Sign Up!</title>
  <link rel="stylesheet" href="form_styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="templates/header.css">
  <link rel="stylesheet" href="templates/tags.css">
</head>
<body>

  <?php include('templates/header.html'); ?>
  <br><br>

  <form action="profile.php" method="post">
    <div class="form-container">
      <div class="form-element">
        <label for="profession">What is your field of expertise?</label>
        <select name="profession" id="profession">
          <option value="photographer">Photography</option>
          <option value="graphic designer">Graphic design</option>
          <option value="both">Photography and Graphic design</option>
        </select>
      </div>
      <div class="form-element">
        <label for="first-name">First Name</label>
        <input type="text" name="first-name" id="first-name">
      </div>
      <div class="form-element">
        <label for="last-name">Last Name</label>
        <input type="text" name="last-name" id="last-name">
      </div>
      <div class="form-element">
        <label for="other-name">Other Name</label>
        <input type="text" name="other-name" id="other-name">
      </div>
      <div class="form-element">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
      </div>
      <div class="form-element">
        <label for="phone">Phone</label>
        <input type="phone" name="phone" id="phone">
      </div>
      <div class="form-element">
        <label for="phone">Password</label>
        <input type="password" name="password" id="password">
      </div>
      <div class="form-element">
        <label for="phone">Confirm Password</label>
        <input type="password" name="password" id="password">
      </div>
      
  </div>
  <br><br>

  <div class="form-container" id="work-experience" >
      <p>Previous Work</p>
      <div class="form-element">
        <label for="role">Role</label>
        <input type="text" name="role[]" class="role" id="role">
      </div>
      <div class="form-element">
        <label for="client">Client/Company</label>
        <input type="text" name="client[]" class="client" id="client">
      </div>
      <div class="form-element">
        <label for="location">Location</label>
        <input type="text" name="location[]" class="location" id="location">
      </div>
      <div class="form-element">
        <label for="start-date">Start Date</label>
        <input type="text" name="start-date[]" class="start-date" id="start-date">
      </div>
      <div class="form-element">
        <label for="end-date">End Date</label>
        <input type="text" name="end-date[]" class="end-date" id="end-date">
      </div>
      <div class="form-element">
        <label for="description">Description</label>
        <textarea name="description[]" id="description" cols="30" rows="10"></textarea>
      </div>
      <div class="form-element">
        <button type="button" id="add-experience">Add Entry</button>
      </div>
  </div>
  <br><br>

  <div class="form-container">
      <p>Education</p>
      <div class="form-element">
        <label for="level">Level</label>
        <input type="text" name="level[]" class="level" id="level">
      </div>
      <div class="form-element">
        <label for="institution">Institution</label>
        <input type="text" name="institution[]" class="institution" id="institution">
      </div>
      <div class="form-element">
        <label for="field">Field</label>
        <input type="text" name="field[]" class="field" id="field">
      </div>
      <div class="form-element">
        <label for="degree">Degree</label>
        <input type="text" name="degree[]" class="degree" id="degree">
      </div>
      <div class="form-element">
        <label for="edu-start-date">Start Date</label>
        <input type="text" name="edu-start-date[]" class="edu-start-date" id="edu-start-date">
      </div>
      <div class="form-element">
        <label for="edu-end-date">End Date</label>
        <input type="text" name="edu-end-date[]" class="edu-end-date" id="edu-end-date">
      </div>
      <div class="form-element">
        <label for="edu-description">Description</label>
        <textarea name="edu-description[]" class="edu-description" id="edu-description" cols="30" rows="10"></textarea>
      </div>
      <div class="form-btn">
        <button type="button" id="add-education">Add Education</button>
      </div>
  </div>

  <div class="form-container">
      <p>Skills</p>
      <div class="form-element">
        <input type="text" name="skill" id="skill" placeholder="Enter a skill">
        <button type="button" class="form-btn" id="add-skill">Add</button>
      </div>
      <div class="tag-container" id="skill-tags">
        <!-- Skill tags will be dynamically added here -->
      </div>
  <br><br>
  <div class="form-element">
    <input type="submit" name="submit" value="Sign Up">
    <button type="button" id="cancel" onclick="cancelForm()">Cancel</button>
  </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="templates/reg_script.js"></script>
  <script>
    // JavaScript code for handling skills tags

    // Get the required elements
    const skillInput = document.getElementById('skill');
    const addSkillBtn = document.getElementById('add-skill');
    const skillTagsContainer = document.getElementById('skill-tags');

    // Event listener for adding a skill tag
    addSkillBtn.addEventListener('click', () => {
      const skill = skillInput.value.trim();

      if (skill !== '') {
        const tag = document.createElement('div');
        tag.classList.add('tag');
        tag.textContent = skill;

        const removeIcon = document.createElement('i');
        removeIcon.classList.add('bx', 'bx-x');
        removeIcon.addEventListener('click', () => {
          tag.remove();
        });

        tag.appendChild(removeIcon);
        skillTagsContainer.appendChild(tag);

        // Clear the input field
        skillInput.value = '';
      }
    });

  </script>
  <script>
    let btn = document.querySelector('#cancel');
    let cancelBtn =document.querySelector('#cancel');

    function cancelForm(){
        window.location.href = "login.html";
    }
  </script>

    <script>
      document.querySelector('form').addEventListener('submit', function(e) {
      e.preventDefault(); // Prevent the form from submitting
      
      // Retrieve form data
      const firstName = document.getElementById('first-name').value;
      const lastName = document.getElementById('last-name').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;
      const profession = document.getElementById('profession').value;
      
      // Store data in session storage
      sessionStorage.setItem('first-name', firstName);
      sessionStorage.setItem('last-name', lastName);
      sessionStorage.setItem('email', email);
      sessionStorage.setItem('phone', phone);
      sessionStorage.setItem('profession', profession);
      
      // Redirect to client_profile.html
      window.location.href = "profile.php";
      });
    </script>
</body>
</html>
