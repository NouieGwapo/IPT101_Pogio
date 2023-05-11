<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" id="student-form">
                            <div class="mb-3">
                                <label>Student Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Student Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Student Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Student Course</label>
                                <input type="text" name="course" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // validate the form on submit
      document.getElementById('student-form').addEventListener('submit', function(event) {
        const name = document.getElementsByName('name')[0].value.trim();
        const email = document.getElementsByName('email')[0].value.trim();
        const phone = document.getElementsByName('phone')[0].value.trim();
        const course = document.getElementsByName('course')[0].value.trim();
        let errors = [];

        if (name === '') {
          errors.push('Name is required');
        }
        if (email === '') {
          errors.push('Email is required');
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
          errors.push('Email is invalid');
        }
        if (phone === '') {
          errors.push('Phone is required');
        } else if (!/^\d+$/.test(phone)) {
          errors.push('Phone is invalid');
        }
        if (course === '') {
          errors.push('Course is required');
        }

        if (errors.length > 0) {
          event.preventDefault();
          alert(errors.join('\n'));
        }
      });
    </script>
</body>
</html>
