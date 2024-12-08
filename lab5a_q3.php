<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <title>Lab 5a Q3</title>
        <style>
         table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        // Function to generate a multiplication table for a given number
        function multiplication($multiplier) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = [
                    'no' => $i,
                    'multiplier' => $multiplier,
                    'answer' => $i * $multiplier
                ];
            }
            return $results;
        }

        // Generate the multiplication table for 2
        $tableData = multiplication(2);
    ?>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Loop through the results and display them in a table
                foreach ($tableData as $row) {
                    echo "<tr>
                            <td>{$row['no']}</td>
                            <td>{$row['multiplier']}</td>
                            <td>{$row['answer']}</td>
                          </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
