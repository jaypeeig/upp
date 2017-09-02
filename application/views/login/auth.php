<nav id="auth-navbar" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="#">Upp</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form id="signin" class="navbar-form navbar-right" data-toggle="validator" action="<?= site_url('authenticate'); ?>" method="post">
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="email" class="form-control" name="email" value="" required placeholder="Email Address">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" value=""  required placeholder="Password">
                    <div class="help-block with-errors"></div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <script>
                  $(function(){

                    $('#signin').validator().on('submit', function (e) {
                        e.preventDefault();

                        $.ajax({
                          url: $(this).attr('action'),
                          type: 'post',
                          data: $(this).serializeArray()
                        }).done(function(res){
                          var res = JSON.parse(res);
                          if ((typeof res.code !== 'undefined') &&
                            (res.code == true)){
                            location.href = base_url + 'dashboard';
                          }else{
                            $('input[name=<?=$this->security->get_csrf_token_name();?>]').val(res.regenerated_token);
                          }
                        });
                      return false;
                    });

                  });
                </script>
            </form>

        </div>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="jumbotron">
    <h3 class="text-center">Upp Console | Flexible CMS built with <a href='#'>Codeigniter</a></h3>
    <p class="text-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <div class="row">
      <div class="slick-imgs col-sm-12">
        <div><img src="https://unsplash.it/280?image=<?= rand(1, 1000); ?>" class="img-responsive"/></div>
        <div><img src="https://unsplash.it/280?image=<?= rand(1, 1000); ?>" class="img-responsive"/></div>
        <div><img src="https://unsplash.it/280?image=<?= rand(1, 1000); ?>" class="img-responsive"/></div>
        <div><img src="https://unsplash.it/280?image=<?= rand(1, 1000); ?>" class="img-responsive"/></div>
        <div><img src="https://unsplash.it/280?image=<?= rand(1, 1000); ?>" class="img-responsive"/></div>
        <div><img src="https://unsplash.it/280?image=<?= rand(1, 1000); ?>" class="img-responsive"/></div>
        <div><img src="https://unsplash.it/280?image=<?= rand(1, 1000); ?>" class="img-responsive"/></div>
        <div><img src="https://unsplash.it/280?image=<?= rand(1, 1000); ?>" class="img-responsive"/></div>
        <div><img src="https://unsplash.it/280?image=<?= rand(1, 1000); ?>" class="img-responsive"/></div>
      </div>
      <script>
        $(function(){
          $('.slick-imgs').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            autoplaySpeed: 2000,
          });
        });
      </script>
    </div>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Warning!</strong> Better check yourself, you're not looking too good.
    </div>
    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>
