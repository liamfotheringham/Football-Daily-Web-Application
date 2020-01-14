<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <title>Number one for football news | Football Daily</title>
        <link rel="stylesheet" href="../style.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
        <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
    </head>

    <body>
        <div class="container">
            <?php include 'header-evaluation.php'; ?>
            <h2>Week 1:</h2>
            <div class="well">
                <h3><b>Question 1.</b> At the heart of HTML5 frameworks is a grid system. Compare the grid systems for 2 frameworks. How do these frameworks support responsive web design.</h3>
                <p>A framework allows developers to create a functional responsive web design faster and easier. But also, to help improve accessibility and graceful degradation of the websites/applications design onto smaller screens such as that on a tablet or mobile device (aka mobile-first websites). This is mostly done using HTML, CSS and jQuery.</p>

                <p> The grid-system is at the heart of any framework, as it is this that helps mostly to make a website mobile-first. In <b>Bootstrap</b>, the grid system allows up to 12 columns across a webpage. Columns can be grouped together to create a wider column. These columns will re-arrange automatically depending on the size of the devices screen size. The use of classes is also implemented to help create a more dynamic and flexible layout for webpages.</p>

                <p> Like Bootstrap, <b>Foundation</b> has its own, implementable, grid system. In its current state, it uses the XY Grid, which allows for up to 12 independent columns like Bootstrap, but also allows for customization of the grid margin, padding, frame and margin elements. This gives a developer greater control on how the grids will react on their webpage, thus giving a responsive and well thought out design.</p>
            </div>
            <div class="well">
                <h3><b>Question 2.</b> Menu systems are often a bind to get right especially if you want a multi-dropdown menu. In an ideal world you should write the HTML for a menu as a set of hierarchical un-numbered lists. Using this as your HTML, see how your chosen framework renders this. Criticize the implementation of Menus in your chosen HTML5 framework.</h3>

                <p>In Bootstrap, the Nav element is used as a form of navigation between webpages.  Which shares a similar mark-up and style to all other elements found in the framework. It allows for many different options from active and disabled states of menu items, as well as easily implementable dropdown boxes, etc.</p>

                <p>The customization options also available for the Nav element is limitless, as all components and utilities of the navbar can be customized in a CSS style sheet, making it fit into any type of application, without looking out of place.</p>

                <p>A down side to the nav element is that on smaller devices, it can be clustered. Therefore, in that situation I would use a hamburger-style menu. This can easily be implemented, as there are many jQuery plugins that can be found on the internet, and would not ruin the look or feel of the webpage. Simply make a media query in the CSS style sheet that disappears the navbar and reveals the hamburger menu when the screen is a certain size.</p>
            </div>
            <div class="well">
                <h3><b>Question 3.</b> Pick out 5 features, other than grid and menu, that your chosen framework supports and comment on their usefulness.</h3>  
                <ol>
                    <li><b>Consistent Design: </b> All elements that can be used from the Bootstrap framework have a consistent styling. This is a useful feature within bootstrap, as when developing a website, its best to keep the design, look and feel of the site consistent.</li>
                    <br>
                    <li><b>Panels:</b> The panel creates a bordered box with padding around the contents held within it, The panels also come with contextual classes. These panels can help highlight information and when combined with a contextual class, it can give a better inital perception to a user that on what that information contains, such as a process being successful, incorrect information being entered, etc. Examples can be seen below:</li>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">Information Panel</div>
                                <div class="panel-body">You have a meeting at 12pm Today</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">Success Panel</div>
                                <div class="panel-body">Welcome back Colin!</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Warning Panel</div>
                                <div class="panel-body">Incorrect Password!</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <li><b>Media Objects:</b> This provides an easy way to align and display media objects such as images or videos, to the left or right of a page. In implementation, Twitter use this feature to display tweets on their website. This is useful as it enables developers to neatly nest a comments on a webpage, such as the one that will be built for CMP306.
                    </li>
                    <br>
                    <li><b>Glyphicon:</b> Glyphicons are icons that can be used in text, buttons, toolbars, navigation, forms, etc. They can emphasize what the function of the highlighted feature is, or even replace text within a feature if appropriate. As an example, using a magnifying glass icon instead of "Search" in a search box. It will look simpler and more aesthetically pleasing and would reduce the clutter on a users screen. Examples can be seen below:</li>
                    <div class="row">
                        <div class="col-sm-3">
                            <p>Music icon: <span class="glyphicon glyphicon-music"></span></p>
                        </div>
                        <div class="col-sm-3">
                            <p>Glass icon: <span class="glyphicon glyphicon-glass"></span></p>    
                        </div>
                        <div class="col-sm-3">
                            <p>Search icon: <span class="glyphicon glyphicon-search"></span></p>   
                        </div>
                        <div class="col-sm-3">
                            <p>Heart icon: <span class="glyphicon glyphicon-heart"></span></p>    
                        </div>
                    </div>
                    <br>
                    <li><b>Responsive Images:</b> Using the <b>.img-responsive</b> class in an image tag will allow images to scale to its parent element. This is a useful element as it allows images to nicely scale and adjust to different screen sizes and devices, enabling greater accessibility and usability.
                        <br>
                        Small Image:
                        <img class="img-responsive" src="../Pictures/Cats/small%20cat.jpg">
                        Medium Image:
                        <img class="img-responsive" src="../Pictures/Cats/Medium%20cat.jpeg">
                        Large Image:
                        <img class="img-responsive" src="../Pictures/Cats/Large%20cat.jpg">    
                    </li>
                </ol>
            </div>
        </div>
        <div class="container">
            <?php include '../footer.php'; ?>
        </div>
        <script src="/controller/script.js"></script>

    </body>
</html>