<!DOCTYPE html>
<html>
<head>
    <style>
        /* Style for the timetable form */
        .timetable-form {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        /* Style for the timetable table */
        .timetable-table {
            width: 100%;
            border-collapse: collapse;
        }

        .timetable-table th, .timetable-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .timetable-table th {
            background-color: #333;
            color: #fff;
        }

        /* Style for form elements */
        .form-control {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* Style for form buttons */
        .btn {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="timetable-form">
        <h2>Timetable</h2>
        <form>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" class="form-control" required>
            
            <label for="day">Day:</label>
            <select id="day" name="day" class="form-control" required>
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
            </select>
            
            <label for="time">Time:</label>
            <input type="text" id="time" name="time" class="form-control" required>
            
            <button type="submit" class="btn">Add Entry</button>
        </form>
        
        <!-- Timetable table -->
        <table class="timetable-table">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Day</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <!-- Timetable entries will be displayed here -->
            </tbody>
        </table>
    </div>
</body>
</html>
