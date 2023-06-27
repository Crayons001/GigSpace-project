$(document).ready(function() {
    // Work Experience
    $("#add-experience").click(function() {
      var experienceHtml = `
        <div class="form-element">
          <label for="role">Role</label>
          <input type="text" name="role[]" class="role">
        </div>
        <div class="form-element">
          <label for="client">Client/Company</label>
          <input type="text" name="client[]" class="client">
        </div>
        <div class="form-element">
          <label for="location">Location</label>
          <input type="text" name="location[]" class="location">
        </div>
        <div class="form-element">
          <label for="start-date">Start Date</label>
          <input type="text" name="start-date[]" class="start-date">
        </div>
        <div class="form-element">
          <label for="end-date">End Date</label>
          <input type="text" name="end-date[]" class="end-date">
        </div>
        <div class="form-element">
          <label for="description">Description</label>
          <textarea name="description[]" class="description" cols="30" rows="10"></textarea>
        </div>
      `;
      $("#work-experience").append(experienceHtml);
    });

    // Education
    $("#add-education").click(function() {
      var educationHtml = `
        <div class="form-element">
          <label for="level">Level</label>
          <input type="text" name="level[]" class="level">
        </div>
        <div class="form-element">
          <label for="institution">Institution</label>
          <input type="text" name="institution[]" class="institution">
        </div>
        <div class="form-element">
          <label for="field">Field</label>
          <input type="text" name="field[]" class="field">
        </div>
        <div class="form-element">
          <label for="degree">Degree</label>
          <input type="text" name="degree[]" class="degree">
        </div>
        <div class="form-element">
          <label for="edu-start-date">Start Date</label>
          <input type="text" name="edu-start-date[]" class="edu-start-date">
        </div>
        <div class="form-element">
          <label for="edu-end-date">End Date</label>
          <input type="text" name="edu-end-date[]" class="edu-end-date">
        </div>
        <div class="form-element">
          <label for="edu-description">Description</label>
          <textarea name="edu-description[]" class="edu-description" cols="30" rows="10"></textarea>
        </div>
      `;
      $("#education").append(educationHtml);
    });
  });
