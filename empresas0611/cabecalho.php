<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../js/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../js/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../js/adminlte/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../js/adminlte/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../js/adminlte/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../js/adminlte/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../js/adminlte/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../js/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../js/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../js/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="../js/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../js/adminlte/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="../js/adminlte/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 3 -->
    <script src="../js/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../js/adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../js/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="../js/adminlte/bower_components/raphael/raphael.min.js"></script>
    <script src="../js/adminlte/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../js/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../js/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../js/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../js/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../js/adminlte/bower_components/moment/min/moment.min.js"></script>
    <script src="../js/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../js/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../js/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../js/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../js/adminlte/bower_components/fastclick/lib/fastclick.js"></script>

    <script src="../js/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../js/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <!-- AdminLTE App -->
    <script src="../js/adminlte/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../js/adminlte/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../js/adminlte/dist/js/demo.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="../js/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhMVFRUXGBUVFRUVFRUVFxcYFRUXFxUXFRcYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFxAQFysdHR0tLSsrKy0rLSsrLSsrKystLSsrLSstKy0tLS0tLS0tNy0rNy03LTcrLS0rKy0tKystK//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAQIEBQYDBwj/xAA/EAACAQIEAwQHBQUIAwAAAAAAAQIDEQQFITESQVEGYXGBEyIykaGxwQcj0eHwQlJicoIUFSQzQ5KisnOz8f/EABkBAAMBAQEAAAAAAAAAAAAAAAABAwIEBf/EACQRAQEAAgICAgICAwAAAAAAAAABAhEDIRIxQVETMgQiQmFx/9oADAMBAAIRAxEAPwDkAXFOV2G2GtDxoAjETFaG2AFbMn2wd5x7o/U1hlO2mko/y/VmpO2cvTJMmZPR461NcuJN+C1+hCZd9lKF6kpfuxa85O34lnO1Y5HKpVUVxSdl1KvF51v6ON7L2nsvIY2ubCN25+8ylXG1ZLWo/J8Mbd3Q41UnZ316tt/MR+TYRqRezXvHI89ldHSGJqQ2nKPmwLbfCqDZksD2hqxtxNTXfv70aLA57Rq8+GXR/iZt03jqpqpD1TR0TAxut6NsPQgqQGUSwrBADYoUVoABtgFCwyYwBbAUTbwBZCI53QEI0KwSAGtDVE6i2GZkYmT7be1C/wC79TXlRneTxxDTlJrhVtO8cvyzl3HnDND2frxpUpSe8pWt4LT6iZlktKkr+kencik9K3pF2S1/NlcbK57LitswzHjekr73TVlHolbdlfGrJ3XKT1S0vYbTnfl+rbnRNJq0XJ7K+qSt0NMj0j4eFO6ve3PbcSc+GzVm+5be8fFaq3q22tu33iY2pe78rpWu+YESWqu1q9uHu7upwn0+YtndcN1/VrYHBNNL3sA467WFdSXy5WFvbR2GzXRgF9lPaKcLRneUfil4mvw9aM4qUGmnzX17zzCFVq9uZaZLm8qU9/Ve65MxcfpTHNv7BYISur9Vf3j0YVIxBwADQQtgAjbgOEsAYwBBCib0CQ0dYGiDpILYBWAIwYojAEbKvNMeop+B3zLEcK0MdnuKaXDfWV/cZ3u+MF6m1Pj8ZKpO7el3ZHG3SwtOKJeFwqk9jpkmMcneVQ1NrQ7UMS09Fv8ArUul2fUl6rd+nIWt2YqNNpxutoq+vmzP5cftv8Oaoutdde7bvHNxTj611a6W+r6kjCZFiak7Kna372kfzNDS7J1LLikuLpFWSHeTGfJTjy+mbpy9WTnfi/ZSVlqQqiafS5sY9npqd5etyfhyIeZ5U1K1vDyF+SHeKxk5w1BRL/8Au2S14dfAk0cnlL9lLxNXOFOOsy6Y3Y1FXKHHl8CoxuBaVxTOU8uOzte5F2jcpKnUt0T22NSeVxXvR6H2fx7rUlxe1G0X39GLLHR4ZbWdhABmGyMQVjWMAAQMCYywgtgKpvQLCDhDndJLCD2MsAKNqOyY84YuVosLdQKHMKzlKxlc7qXqW6JL6mirO8mzLZjO9ST7zH8fvK0ufrHTlTfQvsko3d2vIosPozUZItLnRy3WKPDN5LyjTtqS6MLs4USZRdjzq9PFOw9MlxokahMmwaA9CNHuItXARbu0iwhK4s0PstRUVcFHojjVoJciyqx1ItZhuiYxT4qkimxmGutjQ4uPNFbVibwyTyjDYnD8Mmv1rsXnZPEtVfRvRWa776W+RAzmFppnbIKtq9NNby357O2vmd07xedesm0T1FCwE1TWIx7GxGAgYthbAGKAQCqb0FhYUDndBGI0KIAKQsxfqk1orc1ehnP0cUM+Zkqz9ZvvfzNVUej8H8jJO9/eH8ae0/5N9OkJGqyfRGVpQvJJczZ5fR4YK+rK89/qzwTtbUGTKCK+nJJa6FnhpK17o4bjXfMk6lAkKJzw011JsIJrQfi35RxpzZ3lPQZOg9PE6OOgaCJVZFmiwnT7iNWjYNBU10QMVsWeJRU4xjxieVZfOLOS/Xicsmk/Twte/Gl4ptCZnP7wfkSviINcpqy+bO/H9Xm5/u3bQlhWKjCpBLDhGIEQDmNAmJsAoFk3oADmhEjndJqCw6wNBsGlVnD0ZavRasos2rJuyJ8l6axnavWEnUi+FabX+i7zMY3AuG/V/A9NVJQoUVtdcXm3u/Iz3arDr0alFWa9p20d9vmHDl43TfPw7x2z2RYPind8jR42vwR9VXfJfiRuzuHSjfq/kXkst4tR8mX9u2OLDWLL+mqTabu/BO3kdXisQrqMZW627i+xmHlGLcUtNiqxFOr6CdRVZ+ljwvgdl6vPhX7RvHKVjLCxFp5vWg929jRZJnFR6VOexU5Bhnia9NJ1I040r15VHGzqetdw/hfqq2+jLSP3dTgdna2q1Q8/+Hx7a6ji7pX/AEupIdVLUrcC0xMbUsc7r10TH5uqZn8X2ng9df8A4JjW6suCKbb6d5mK9FKVV+jnw0Wo1GpL1XJ2Ss9XqVwwl9ubkzs9LuXaSDel14nD+9oTdtr/ADK2GEpNQlNzippuDkrL3oTGZU0rp37zfjil5Z1DzyFpJ8yV2UjxYhaezGUn7kiPmEX6OnfV3krl52Lwto1Kr3bUF4JXfxaKS/1Ss3m0VgHWBowoQRjlELANGhcWwDDDgKBVJ6ExBRDndQYAAEhZlO0TO1C8zd2RRN6HNye1uNsqdDjnGPKMIrzauVnbPDQWHklrJcLsuWqvcs8PWsm+sY/JDMdh+Gk3JX4lJyb8HYMbqujk/XTOZJD1Y6Gipx0KXAK1i6ouyDPupYdFqUE1Z7HJYeGl2nbqiVe4n9mTFOlLjtGrwglok9LezYhPD3ekUkXMcOlrYjVZWHcqUwkPwVSzOea1uXU50J3loccyk7pilas6cMtlOm5OErOVlLRNWTut+Zwzvs/CvN1W7Tk05WVk7LXTq9Cxw8UyRdorOSxC8UqizDDynCNNRjGEUlGMdbd93zOkMEuBLuLfhuznXp2Whm52j8cjH5/QSjBfxfNWNXgcL6KlCK2t+ZQZ3Rc50oJX4qkfctX8jUUZfdpdJNe5fmWmV1IlMZ2ZYBQNpEQNgKANYoJAxkw4BcCib0EBAIOgAAAFZnGxRyNBmkLxM9Y5uT2th6aHA1XOmrb2s/LQ7ZlQtSvxS2ta71KXK8y9C2mrxfNa8L56dCzxWYUpU3KUlJtcMFfm+4UVt6Q8H7SLem7lTgC0o7jrGKyoIlShGKuyHB6EerXc3pttfl+YRbaRUrt7bFLXrtt22voWMpqK3uVvs6W6u/UNFal4Wi7XOGY3LDLsRBr1l5bETNcTFSdrBJTtmjMomm7PkW8qFyiwUvWuunzZd0MRyY6zjXGpRsRa0tCzrtWKjHMUGavpX9I5L9n4J6FnTmnFeLf0+hT05O9Sz6adS0wu2m2i+GpbH257enURjgaKom3ABUgLRAFYiAmHAdYQqm37QIAIOgNhcUGIOVaHErFDjMFKL0V0aMRoWWErWOWmSdN80cZRWtkr+BeZvEprbfrmc1mrpWXcWuWyuW9JalFgZ2lYu4s3RjVhWp/dtkZpcKWxPw7vGxBxuF4lo7O2j6Cil7jhKlruMlQbZFwMfXjTqTlGV4q7twyWt2nyexcUsuxCs0lO8mkufczfjS3PlX1aGvRrnsRsRh+Vty8r+mS4Z0JX7o8WnkRKvG1f0U1yvZ79DXZWY/avpU3HVEyVXS/QiVsdwNKacb6K5MopSjdGcv8AZTr0kQq3gmVOMnctKi4KepUVZeq2ZnsZ1xw0fUk+srLroiyw9Phik9+ZzwOHUYR01395JudEjnyuwhGKA2CAkCQWGCNBYVggJiBBAKpvQBLisQg6CgAAYsNHEfEYiMFdtAStziRXYOi5qco7U7OT5Xbso+OpEzvNfSO0dIrd9e5GwyvK/R5Y1a0mlVn1vxJ28kjH4/8AKicnemeqLhakW+Eq3RElSucKFRwdmYvavqtPg61jtVepTwr3SZZUql0Sq2NRsZhlNdRMsx+JoSSpVGrbRl6y+JNSG1KXPobxrXXzEiPaHFxm5ShCTejVpJb3fgV+Nz7ESvbgjre6u2k+RKeNm+etrXstiHLDcytyZmPF9KrBYTinxVHxNbX+nQuqcVtscoUrbDcTV4ESyux1DM1r3agiDVXE4015+C3GVa37T/XQl4Gg4pyl7UvguSN4YoZ5JX6QlhQLIkYgXBgQBMAGBYQGDAMPYAuBVJ6AwINbOKEd5p+F2Qa3aamtoSfwIL3KLwLGVr9p5v2Ipd71K7E51XlvNrw0H42s+ca3MMxhSXrPXpzMdmWZTqt30XJESpUctW233sZI3jh9p5Z7WvZrBKtWSa0XrNeD0+J69lVNNcEldNWa6pqzPOPs6hetU7oX/wCSPUMBSN2bLHpjM1ymWHqcD1i9YS5SX4orMZhuaPWMZl8K9P0dRd6a3i+qMJmeVToy4Kkf5ZJerJd3f3HJnhcbuOvDOZTV9s3CVtCxy/EcjhiKBxScXczrbXpf3HxqXWpGweIUkr6EpJGPHS3nLHN2XIJ1jtOMWRHAd2U0HMpczxOtvMn43EKKM+1Kcurk0orrfRI1hinnl9LLK6PH949k7RXeubLQzlav/Y8ZUoOTcFwqXi4q7S7noaRPodHjpzeWyCD7DWA0SwADAwJYUAZNYChYDYewBYCqSNdg5CqIlg0xsKRxk7j5glYZCISBIVgbVfZq/wDFuPWlO3k0z1vBQPGuwFbgzCh/Fxw/3Qf4HtdCFhtRMpDsVhIVYuE4qUXuvw6BSZJghWbG9emBz3sxOleULzp/8o/zdV3malRPZuEzmfdl41L1KCUam7jtGX4MjlxfMdGHNvrJ5yqL/Z0EdepHlcnzouMnFpqS0lF6WZwrMirr6R1jnzTOdbMHyQtXUTCYCpWmoU48Unsly72+SHrYt0gVHKTu/I1fZvJHS/xFVWlb7qDWqv8Atv6F5kvZiGHtOpapV5c4x8FzfedM1ejudGHHpzcnJ8R5B2vhP+2VJtWjNrhb5pJL3lx2azHjh6KXtR270aHOslVag1o21xQ6xlyPNqVSUJ3Ts18Gnr8Uayx3EsLqvQ7jWykwnaOm7KacXza2LahiYTXqyUvP6El9uoWBA2AAgABEALiAGIsIFgKpuIo1sG7DYNlv8BLC2EQAtu8VMEIAWGQV/R4rDzb0VWnfwckn8z6FjT+DPmrVardarxWqPo/KcWqlOlVW1SEJebihtRIirHenIJUxiVgKpaC5zpzOjAlTnuUUq8byVppWjNb+D6ow2P7N4im9IOa5Sjr71yG9rftInTxE6OFp0qkIerKc+J8U17XDwtaLbxTM7iPtMx1RpcVKlFPX0dO7fc+Jv4E8pjXTxzkjUZd2VqzkvStU497Tk/BI2OAwFKhDgpRS6veT8WeNYnttmDvwVaa6ONGN+53bep6T2P7RrHUPSW4akHwVodJW0mv4Zb+9Dxk+GeaZz2vqy0M9nFX9lbltjcTZMpVTc25Mo53KEGoLheq0a5PxR5l2ywyhip2XCpJVEr85e1bzueqyglFpPnc8++0On97Tl1g4/wC2X5gGQkLGpJO6bFiJIzT3YtcHn1WG74o9+r9+5fYLO6VTd8L6P6MxQ5GLg1OSvRU76gYbB5nVp+zJ26PVe4vcF2hi9Kis+q28zNliksq8aAZTqKWsWmuqHNiNiQEuIVScExlx0nZDUNgNDhBUBiKHNCWHJAAkez/Z7Xc8vo23hx03/TJ2+DR41CJ6p9j2Ivh69L9yqpLwnBJ/FMbUej4eXFFPnzCcDnQnZkloGajrQz32h5+8HgalSD+9nalS/mno5f0x4n5GknExv2i5A8ZQ9TWrR4p0o3dpNr14+Ntn1QVrHW5t47hsRFJrhUrq3rXbT/eX8X4jZYaMot8SvdLh1v4ruOMaStF8S1veOqlGzt61+oTi0R09Lysn9p05RqShz028uhtPsrxXDi6kU9KlCTavs6c4yi7eb95ja1fjilZaX2079ep6V9nvZ6WHoOvUX3lZWgucabd15ytc3jPlDlz1jZ8NNUTqS7ifToqNl3/IdgMLYmOK1KOJBrwg94/A83+02hGPobc3U+SPTaqPNvtR/wBDxqL5Co0wNhGLYRsQN0FY9oa0BGBxDmlyGMAmYLHzpu8X5cjTZfnUKllL1ZfB/gY2I6LM3FuZVN41+mBnrsB6G11DYb0ABsH/AJDfzAAM6nv5DobAAGej0f7HN8V4UfnMUBnHpSJsNhQBmudfkQsP7a8RQAPm3F/5lb/yVf8A2SLjtB/n1f6f+kQAl8vXy/RnafteZ9DP/T/lh/1QAVnpwc3qJuE5+A57AA3Oj1Dzn7WfZw381T/qgATVedrcOYAZjJz2YkwAZU3oN5iAAOjuD+oAMRVgAA0//9k=" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="data:image/jpeg;base64,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" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class="fa fa-clock-o"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="data:image/jpeg;base64,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" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="data:image/jpeg;base64,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" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                            page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Create a nice theme
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Some task I need to do
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Make beautiful transitions
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="data:image/jpeg;base64,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" class="user-image" alt="User Image">
                            <span class="hidden-xs">Orion Teles</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="data:image/jpeg;base64,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" class="img-circle" alt="User Image">

                                <p>
                                    Orion Teles - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="data:image/jpeg;base64,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" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Orion Teles</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li>
                    <a href="../filmes/index.php">
                        <i class="fa fa-th"></i> <span>Filmes</span>
                    </a>
                </li>
                <li>
                    <a href="../atores/index.php">
                        <i class="fa fa-th"></i> <span>Atores / Atrizes</span>
                    </a>
                </li>
                <li>
                    <a href="../generos/index.php">
                        <i class="fa fa-th"></i> <span>Gêneros</span>
                    </a>
                </li>
                <li>
                    <a href="../classificacao/index.php">
                        <i class="fa fa-th"></i> <span>Classificação Indicativa</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">