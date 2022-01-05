<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>



<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span><span>Admin Dashboard</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="/dashboard" class="active"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="/posts"><span class="las la-users"></span>
                        <span>Posts</span></a>
                </li>
                <li>
                    <a href="/category"><span class="las la-clipboard-list"></span>
                        <span>Categories</span></a>
                </li>
                <li>
                    <a href="/approvedposts"><span class="las la-clipboard-list"></span>
                        <span>Approved Posts</span></a>
                </li>
                <li>
                    <a href="/deniedposts"><span class="las la-clipboard-list"></span>
                        <span>Denied Posts</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"> </span>

                </label>
                Dashboard

            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>
            
            <div class="user-wrapper">
                <div>
                    <span class="material-icons">light_mode</span>
                <span class="material-icons blue-color"> dark_mode</span>
                </div>
                &nbsp; &nbsp;
                <img src="img/profile.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Symplice</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>
                            40
                        </h1>
                        <span>Posts</span>
                    </div>
                    <div>
                        <span class="las la-users">

                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>
                            370
                        </h1>
                        <span>Category</span>
                    </div>
                    <div>
                        <span class="las la-clipboard">

                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>
                            124
                        </h1>
                        <span>Denied Posts</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag">

                        </span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>
                            90
                        </h1>
                        <span>Approved Posts</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet">

                        </span>
                    </div>
                </div>

            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Posts</h3>
                            <button>
                                Post list <span class="las la-arrow-down">

                                </span>
                            </button>

                        </div>
                        <div class="card-body">
                            <table width="100%">
                                 <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Content</td>
                                        <td>Anonymas</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                    </tr>
                                   
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Categories</h3>
                            <button>
                                Category list <span class="las la-arrow-down">

                                </span>
                            </button>

                        </div>
                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                   
                                    <div>
                                        <h4>Test</h4>
                                        <small>1</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-comment"></span>
                                </div>
                            </div>
                            
                            
                        </div>
        </main>
    </div>
</body>

</html>