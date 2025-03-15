<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Registration</title>
</head>
<body>
    <center>
        <h1>Doctor Registration</h1>

        <form action="Home.php" method="POST">
            <!-- Personal Information Frame -->
            <fieldset>
                <center><h4>Personal Information</h4></center>
                <table>
                    <tr>
                        <td align="right"><label for="name">Full Name:</label></td>
                        <td><input type="text" id="name" name="name" required></td>
                    </tr>

                    <tr>
                        <td align="right"><label for="dob">Date of Birth:</label></td>
                        <td><input type="date" id="dob" name="dob" required></td>
                    </tr>

                    <tr>
                        <td align="right"><label for="email">Email Address:</label></td>
                        <td><input type="email" id="email" name="email" required></td>
                    </tr>

                    <tr>
                        <td align="right"><label for="phone">Phone Number:</label></td>
                        <td><input type="tel" id="phone" name="phone" required></td>
                    </tr>

                    <tr>
                        <td align="right"><label for="gender">Gender:</label></td>
                        <td>
                            <input type="radio" id="male" name="gender" value="Male">
                            <label for="male">Male</label>

                            <input type="radio" id="female" name="gender" value="Female">
                            <label for="female">Female</label>

                            <input type="radio" id="other" name="gender" value="Other">
                            <label for="other">Other</label>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <br>

            <!-- Professional Details Frame -->
            <fieldset>
                <center><h4>Professional Details</h4></center>
                <table>
                    <tr>
                        <td align="right"><label for="specialization">Specialization:</label></td>
                        <td>
                            <select id="specialization" name="specialization" required>
                                <option value="Cardiology">Cardiology</option>
                                <option value="Neurology">Neurology</option>
                                <option value="Orthopedics">Orthopedics</option>
                                <option value="Dermatology">Dermatology</option>
                                <option value="Pediatrics">Pediatrics</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td align="right"><label for="license">Medical License No:</label></td>
                        <td><input type="text" id="license" name="license" required></td>
                    </tr>

                    <tr>
                        <td align="right"><label for="institution">MBBS Institution:</label></td>
                        <td><input type="text" id="institution" name="institution" required></td>
                    </tr>
                </table>
            </fieldset>

            <br>

            <!-- Languages Known and Designation Frame -->
            <fieldset>
                <center><h4>Languages Known and Designation</h4></center>
                <table>
                    <tr>
                        <td align="right"><label for="languages">Languages Known:</label></td>
                        <td>
                            <input type="checkbox" name="languages" value="Bengali"> Bengali
                            <input type="checkbox" name="languages" value="English"> English
                            <input type="checkbox" name="languages" value="Hindi"> Hindi
                        </td>
                    </tr>

                    <tr>
                        <td align="right"><label for="designation">Designation:</label></td>
                        <td>
                            <select id="designation" name="designation" required>
                                <option value="General Physician">General Physician</option>
                                <option value="Surgeon">Surgeon</option>
                                <option value="Consultant">Consultant</option>
                                <option value="Resident Doctor">Resident Doctor</option>
                                <option value="Specialist">Specialist</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <br>

            <!-- Submit Button -->
            <button type="Registration">Registration</button>
        </form>
    </center>
</body>
</html>
