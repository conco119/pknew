<div class="container">
    <div class='col-md-8'>
        <div class="well">
            <div class="row">
                <div class="col-md-12">
                    <div class="row hidden-md hidden-lg"><h1 class="text-center" >{$post.title}</h1></div>

                    <div class="pull-left col-md-4 col-xs-12 thumb-contenido"><img class="center-block img-responsive" src="{base_url($post.path)}/{$post.name}" /></div>
                    <div class="">
                        <h1  class="hidden-xs hidden-sm">{$post.title}</h1>
                        <hr>
                        <small>{$post.category_name}</small><br>
                        <small>{$post.created_at}</small><br>
                        <hr>
                        <p class="text-justify">{$post.content}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='col-md-4'>
        <div class="card my-4">
            <h5 class="card-header">Danh mục</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                      {foreach from=$categories item=item}
                          <li>
                              <a href="#">{$item.name}</a>
                          </li>
                      {/foreach}
                  </ul>
                </div>
              </div>
            </div>
          </div>

    </div>
</div>