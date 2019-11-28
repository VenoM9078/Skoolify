<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    <table width="100%" style="width:100%" class="table table-bordered table-striped" border="2" cellspacing="3" align="center">
        <tr>
         <td align="center">
         <td>8:30-9:30
         <td>9:30-10:30
         <td>10:3-11:30
         <td>11:30-12:30
         <td>12:30-2:00
         <td>2:00-3:00
         <td>3:00-4:00
         <td>4:00-5:00
        </tr>
        @foreach($schedule as $schedules)
        <tr>
         <td align="center">MONDAY
         <td align="center">{{ $schedules->mon1 }}
         <td align="center">{{ $schedules->mon2}}<br>
         <td align="center">{{ $schedules->mon3 }}<br>
         <td align="center">{{ $schedules->mon4 }}<br>
         <td rowspan="6"align="center">L<br><br>U<br><br>N<br><br>C<br><br>H
         <td align="center">{{ $schedules->mon5 }}<br>
         <td align="center">{{ $schedules->mon6 }}<br>
         <td align="center">{{ $schedules->mon7 }}
        </tr>
        <tr>
         <td align="center">TUESDAY
         <td align="center">{{ $schedules->tue1 }}<br>
         <td align="center">{{ $schedules->tue2 }}<br>
         <td align="center">{{ $schedules->tue3 }}<br>
         <td align="center">{{ $schedules->tue4}}
         <td align="center">{{ $schedules->tue5 }}<BR>
         <td align="center">{{ $schedules->tue6 }}<br>
         <td align="center">{{ $schedules->tue7 }}
        </tr>
        <tr>
        <tr>
        <td align="center">WEDNESDAY
            <td align="center">{{ $schedules->wed1 }}<br>
                <td align="center">{{ $schedules->wed2 }}<br>
                <td align="center">{{ $schedules->wed3 }}<br>
                <td align="center">{{ $schedules->wed4}}
                <td align="center">{{ $schedules->wed5 }}<BR>
                <td align="center">{{ $schedules->wed6 }}<br>
                <td align="center">{{ $schedules->wed7 }}
        </tr>

        <tr>
        <td align="center">THURSDAY
            <td align="center">{{ $schedules->thu1 }}<br>
                <td align="center">{{ $schedules->thu2 }}<br>
                <td align="center">{{ $schedules->thu3 }}<br>
                <td align="center">{{ $schedules->thu4}}
                <td align="center">{{ $schedules->thu5 }}<BR>
                <td align="center">{{ $schedules->thu6 }}<br>
                <td align="center">{{ $schedules->thu7 }}
               </tr>
         <tr>
        <td align="center">FRIDAY
            <td align="center">{{ $schedules->fri1 }}<br>
                <td align="center">{{ $schedules->fri2 }}<br>
                <td align="center">{{ $schedules->fri3 }}<br>
                <td align="center">{{ $schedules->fri4}}
                <td align="center">{{ $schedules->fri5 }}<BR>
                <td align="center">{{ $schedules->fri6 }}<br>
                <td align="center">{{ $schedules->fri7 }}
               </tr>
               @endforeach
        </body>
</table>
</body>
</html>