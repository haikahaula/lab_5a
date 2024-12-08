<!DOCTYPE html> 
<html lang="en"> 
    <head> <title>Lab 5a Q2</title> 
    <style>
         table, th, td {
            border: 1px solid black;
        }
    </style>
</head> 
<body> 
    <?php 
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22
        ]
        ];
    ?>
     <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($students as $student) {
                    echo "<tr>
                            <td>{$student['name']}</td>
                            <td>{$student['program']}</td>
                            <td>{$student['age']}</td>
                          </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>