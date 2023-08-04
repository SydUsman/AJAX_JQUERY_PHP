<!DOCTYPE html>
<html>
<head>
  <title>Day 3</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  <form>
    <label for="country">Country:</label>
    <select id="country" name="country">
        <option value="">Select country</option>
    </select>

    <label for="city">City:</label>
    <select id="city" name="city">
        <option value="">Select city</option>

    </select>

    <label for="state">State:</label>
    <select id="state" name="state">
        <option value="">Select State</option>
    </select>
  </form>

  <script>
    $(document).ready(function() {
      $.ajax({
        url: 'load_countries.php',
        type: 'POST',
        success: function(response) {
          $('#country').html(response);
        }
      });

      $('#country').change(function() {
        var countryId = $(this).val();

        $.ajax({
          url: 'load_cities.php',
          type: 'POST',
          data: { countryId: countryId },
          success: function(response) {
            $('#city').html(response);
          }
        });
      });

      $('#city').change(function() {
        var cityId = $(this).val();

        $.ajax({
          url: 'load_states.php',
          type: 'POST',
          data: { cityId: cityId },
          success: function(response) {
            $('#state').html(response);
          }
        });
      });
    });
  </script>
</body>
</html>
