<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_index',);
            }
            not_admin_index:

            // admin_new
            if ($pathinfo === '/admin/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::newAction',  '_route' => 'admin_new',);
            }
            not_admin_new:

            // admin_show
            if (preg_match('#^/admin/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::showAction',));
            }
            not_admin_show:

            // admin_edit
            if (preg_match('#^/admin/(?P<username>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::editAction',));
            }
            not_admin_edit:

            // admin_delete
            if (preg_match('#^/admin/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_admin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::deleteAction',));
            }
            not_admin_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/estadoenvio')) {
            // estadoenvio_index
            if (rtrim($pathinfo, '/') === '/estadoenvio') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estadoenvio_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estadoenvio_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EstadoenvioController::indexAction',  '_route' => 'estadoenvio_index',);
            }
            not_estadoenvio_index:

            // estadoenvio_new
            if ($pathinfo === '/estadoenvio/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estadoenvio_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EstadoenvioController::newAction',  '_route' => 'estadoenvio_new',);
            }
            not_estadoenvio_new:

            // estadoenvio_show
            if (preg_match('#^/estadoenvio/(?P<estado>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estadoenvio_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadoenvio_show')), array (  '_controller' => 'AppBundle\\Controller\\EstadoenvioController::showAction',));
            }
            not_estadoenvio_show:

            // estadoenvio_edit
            if (preg_match('#^/estadoenvio/(?P<estado>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estadoenvio_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadoenvio_edit')), array (  '_controller' => 'AppBundle\\Controller\\EstadoenvioController::editAction',));
            }
            not_estadoenvio_edit:

            // estadoenvio_delete
            if (preg_match('#^/estadoenvio/(?P<estado>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_estadoenvio_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadoenvio_delete')), array (  '_controller' => 'AppBundle\\Controller\\EstadoenvioController::deleteAction',));
            }
            not_estadoenvio_delete:

        }

        if (0 === strpos($pathinfo, '/motivobloqueo')) {
            // motivobloqueo_index
            if (rtrim($pathinfo, '/') === '/motivobloqueo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_motivobloqueo_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'motivobloqueo_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MotivobloqueoController::indexAction',  '_route' => 'motivobloqueo_index',);
            }
            not_motivobloqueo_index:

            // motivobloqueo_new
            if ($pathinfo === '/motivobloqueo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_motivobloqueo_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MotivobloqueoController::newAction',  '_route' => 'motivobloqueo_new',);
            }
            not_motivobloqueo_new:

            // motivobloqueo_show
            if (preg_match('#^/motivobloqueo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_motivobloqueo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'motivobloqueo_show')), array (  '_controller' => 'AppBundle\\Controller\\MotivobloqueoController::showAction',));
            }
            not_motivobloqueo_show:

            // motivobloqueo_edit
            if (preg_match('#^/motivobloqueo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_motivobloqueo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'motivobloqueo_edit')), array (  '_controller' => 'AppBundle\\Controller\\MotivobloqueoController::editAction',));
            }
            not_motivobloqueo_edit:

            // motivobloqueo_delete
            if (preg_match('#^/motivobloqueo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_motivobloqueo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'motivobloqueo_delete')), array (  '_controller' => 'AppBundle\\Controller\\MotivobloqueoController::deleteAction',));
            }
            not_motivobloqueo_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pais')) {
                // pais_index
                if (rtrim($pathinfo, '/') === '/pais') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pais_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pais_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PaisController::indexAction',  '_route' => 'pais_index',);
                }
                not_pais_index:

                // pais_new
                if ($pathinfo === '/pais/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pais_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PaisController::newAction',  '_route' => 'pais_new',);
                }
                not_pais_new:

                // pais_show
                if (preg_match('#^/pais/(?P<nombre>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pais_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_show')), array (  '_controller' => 'AppBundle\\Controller\\PaisController::showAction',));
                }
                not_pais_show:

                // pais_edit
                if (preg_match('#^/pais/(?P<nombre>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pais_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_edit')), array (  '_controller' => 'AppBundle\\Controller\\PaisController::editAction',));
                }
                not_pais_edit:

                // pais_delete
                if (preg_match('#^/pais/(?P<nombre>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pais_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_delete')), array (  '_controller' => 'AppBundle\\Controller\\PaisController::deleteAction',));
                }
                not_pais_delete:

            }

            if (0 === strpos($pathinfo, '/pedido')) {
                // pedido_index
                if (rtrim($pathinfo, '/') === '/pedido') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pedido_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pedido_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PedidoController::indexAction',  '_route' => 'pedido_index',);
                }
                not_pedido_index:

                // pedido_new
                if ($pathinfo === '/pedido/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pedido_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PedidoController::newAction',  '_route' => 'pedido_new',);
                }
                not_pedido_new:

                // pedido_show
                if (preg_match('#^/pedido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pedido_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_show')), array (  '_controller' => 'AppBundle\\Controller\\PedidoController::showAction',));
                }
                not_pedido_show:

                // pedido_edit
                if (preg_match('#^/pedido/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pedido_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_edit')), array (  '_controller' => 'AppBundle\\Controller\\PedidoController::editAction',));
                }
                not_pedido_edit:

                // pedido_delete
                if (preg_match('#^/pedido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pedido_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_delete')), array (  '_controller' => 'AppBundle\\Controller\\PedidoController::deleteAction',));
                }
                not_pedido_delete:

            }

            if (0 === strpos($pathinfo, '/producto')) {
                // producto_index
                if (rtrim($pathinfo, '/') === '/producto') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_producto_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'producto_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ProductoController::indexAction',  '_route' => 'producto_index',);
                }
                not_producto_index:

                // producto_new
                if ($pathinfo === '/producto/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_producto_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ProductoController::newAction',  '_route' => 'producto_new',);
                }
                not_producto_new:

                // producto_show
                if (preg_match('#^/producto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_producto_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_show')), array (  '_controller' => 'AppBundle\\Controller\\ProductoController::showAction',));
                }
                not_producto_show:

                // producto_edit
                if (preg_match('#^/producto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_producto_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProductoController::editAction',));
                }
                not_producto_edit:

                // producto_delete
                if (preg_match('#^/producto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_producto_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProductoController::deleteAction',));
                }
                not_producto_delete:

            }

        }

        if (0 === strpos($pathinfo, '/stock')) {
            // stock_index
            if (rtrim($pathinfo, '/') === '/stock') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stock_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'stock_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\StockController::indexAction',  '_route' => 'stock_index',);
            }
            not_stock_index:

            // stock_new
            if ($pathinfo === '/stock/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_stock_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\StockController::newAction',  '_route' => 'stock_new',);
            }
            not_stock_new:

            // stock_show
            if (preg_match('#^/stock/(?P<productos>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stock_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_show')), array (  '_controller' => 'AppBundle\\Controller\\StockController::showAction',));
            }
            not_stock_show:

            // stock_edit
            if (preg_match('#^/stock/(?P<productos>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_stock_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_edit')), array (  '_controller' => 'AppBundle\\Controller\\StockController::editAction',));
            }
            not_stock_edit:

            // stock_delete
            if (preg_match('#^/stock/(?P<productos>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_stock_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_delete')), array (  '_controller' => 'AppBundle\\Controller\\StockController::deleteAction',));
            }
            not_stock_delete:

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_index
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario_index',);
            }
            not_usuario_index:

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }
            not_usuario_new:

            // usuario_show
            if (preg_match('#^/usuario/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::showAction',));
            }
            not_usuario_show:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<username>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::editAction',));
            }
            not_usuario_edit:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
