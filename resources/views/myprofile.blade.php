<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile - Skoolify</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <aside class="profile-card">

        <header>
        
            <!-- here’s the avatar -->
        <a>
           <div class="circle">
              <h1 style="font-size: 70px;padding: 16px 20px;">{{ Auth::user()->name[0] }}<h1>
           </div>
                
         </a>
            
            <!-- the username -->
            <h1 style="font-size: 33px;">{{ Auth::user()->fname[0].".". Auth::user()->lname }}</h1>
            <hr>
            <!-- and role or location -->
            <h2 style="font-size: 16px;">Username: {{ Auth::user()->name }}</h2>
            
            <hr>
            <!-- and role or location -->
            <h2 style="font-size: 16px;">Roll Number: {{ Auth::user()->rollno }}</h2>
            <hr>
            <!-- and role or location -->
            <h2 style="font-size: 16px;">Class: {{ Auth::user()->class }}</h2>
            <hr>
            <!-- and role or location -->
            <h2 style="font-size: 16px;">Email: {{ Auth::user()->email }}</h2>
        
        </header>
    
        <!-- bit of a bio; who are you? -->
        <div class="profile-bio">
        
            <p>{{ Auth::user()->message }}</p>
        
        </div>
    
        <!-- some social links to show off -->
        <ul class="profile-social-links">
            <div class="btn btn-group">
           {{ link_to_route('profile.edit','Edit Profile',[Auth::user()->id],['class'=>'btn btn-danger']) }} 
           {{ link_to_route('home','Go Back',null,['class'=>'btn btn-success']) }}
            </div>  
        </ul>
    
    </aside>
</body>
</html>