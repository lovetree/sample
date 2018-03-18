<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <style type="text/css">
  	body {
  padding-top: 60px;
}

section {
  overflow: auto;
}

textarea {
  resize: vertical;
}

.jumbotron {
  text-align: center;
}

/* typography */

h1, h2, h3, h4, h5, h6 {
  line-height: 1;
}

h1 {
  font-size: 3em;
  letter-spacing: -2px;
  margin-bottom: 30px;
  text-align: center;
}

h2 {
  font-size: 1.2em;
  letter-spacing: -1px;
  margin-bottom: 30px;
  text-align: center;
  font-weight: normal;
  color: #777;
}

p {
  font-size: 1.1em;
  line-height: 1.7em;
}

/* header */

.navbar-inverse {
  background-color: $navbar-color;
}

#logo {
  float: left;
  margin-right: 10px;
  font-size: 1.7em;
  color: #fff;
  text-decoration: none;
  letter-spacing: -1px;
  padding-top: 9px;
  font-weight: bold;
  &:hover {
    color: #fff;
  }
}
footer {
  margin-top: 45px;
  padding-top: 5px;
  border-top: 1px solid #eaeaea;
  color: #777;

  a {
    color: #555;
  }

  a:hover {
    color: #222;
  }

  small {
    float: left;
  }

  ul {
    float: right;
    list-style: none;

    li {
      float: left;
      margin-left: 15px;
    }
  }

  img.brand-icon {
    width: 17px;
    height: 17px;
  }

  .slogon {
    font-size: 13px;
    font-weight: bold;
  }
}
aside {
  section {
    padding: 10px 0;
    margin-top: 20px;
    &:first-child {
      border: 0;
      padding-top: 0;
    }
    span {
      display: block;
      margin-bottom: 3px;
      line-height: 1;
    }
  }
}

section.user_info {
  padding-bottom: 10px;
  margin-top: 20px;
  text-align: center;
  .gravatar {
    float: none;
    max-width: 70px;
  }
  h1 {
    font-size: 1.4em;
    letter-spacing: -1px;
    margin-bottom: 3px;
    margin-top: 15px;
  }
}

.gravatar {
  float: left;
  margin-right: 10px;
  max-width: 50px;
  border-radius: 50%;
}

#logout {
  cursor: default;
  &:hover {
    background-color: transparent;
  }
}
  </style>
  <body>
    <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="col-md-offset-1 col-md-10">
          <a href="/" id="logo">Sample App</a>
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{route('help')}}">帮助</a></li>
              <li><a href="#">登录</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
@include('layouts._header')
    <div class="container">
      @include('shared._messages')
      @yield('content')
       @include('layouts._footer')
    </div> 
    <script src="/js/app.js"></script>   
  </body>
</html>