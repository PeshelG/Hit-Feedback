
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
    <div class="headers">
        <img src="assets/images/logo.jpg" alt="" srcset="">
        <h2>HIT Campus Visit Feedback Form</h2>
        <a href="admin.php" style="background-color: orange;padding:5px;border-radius:5px; text-decoration:none;color:white;">Admin Login</a>
    </div>
    <form action="../includes/insert.php" method="post" class="add">
        <div class="header">
          <b>Feedback Form:</b>
        </div>
        <div class="header info">
            <b>Personal Information:</b>
          </div>
        <div class="field">
          <label>Name:</label>
          <input type="text" name="name" placeholder="Name" required />
        </div>
        <div class="field">
          <label>Address:</label>
          <input
          name="address"
            type="text"
            placeholder="Address"
            required
          />
        </div>
        <div class="field">
            <label>Email:</label>
            <input
            name="email"
              type="text"
              placeholder="Email"
              required
            />
          </div>
          <div class="field">
          </div>
       <div class="header info">
        <b>Feedback Section:</b>
      </div>

         <div class="field">
          <label>Tick on the things you liked the most:</label>
          <!-- <input type="text" placeholder="Province"> -->
         
        </div>
        <div class="field">
           
          </div>
          <div class="field">
            <div class="check">
                <input name="likes" value="Students" type="checkbox">Students</input>
            </div>
            <div class="check">
                <input name="likes" value="Location" type="checkbox">Location</input>
            </div>
            <div class="check">
                <input name="likes" value="Campus" type="checkbox">Campus</input>
            </div>
          </div>
          <div class="field">
            <div class="check">
                <input name="likes" value="Atmosphere" type="checkbox">Atmosphere</input>
            </div>
            <div class="check">
                <input name="likes" value="Sports" type="checkbox">Sports</input>
            </div>
            <div class="check">
                <input name="likes" value="Courses" type="checkbox">Courses</input>
            </div>
          </div>
          <div class="field">
            <label>How did you know about us:</label>
            <!-- <input type="text" placeholder="Province"> -->
           
          </div>
          <div class="field">
             
            </div>
            <div class="field">
              <div class="check">
                  <input name="knowledge" value="Friends" type="radio" id="how">Friends</input>
              </div>
              <div class="check">
                  <input name="knowledge" value="Television" type="radio" id="how">Television</input>
              </div>
            </div>
            <div class="field">
              <div class="check">
                  <input  name="knowledge" value="Internet" type="radio" id="how">Internet</input>
              </div>
              <div class="check">
                  <input name="knowledge" value="Other" type="radio" id="how">Other</input>
              </div>
            </div>
            <div class="field" style="width:100%;height:100px">
                <label>Do you have anything to add:</label>
                <textarea style="height:150px" name="comment"
                  type="textarea"
                  placeholder="Additional Comments"
                  required
                ></textarea>
            </div>
        <div class="field"></div>
        <div class="field"></div>
        <div class="field two">
        <button>Reset</button>
        <button type="submit">Submit</button>
        </div>
      </form>
</body>
</html>
