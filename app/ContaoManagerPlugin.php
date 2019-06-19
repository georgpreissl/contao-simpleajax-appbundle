<?php 


use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;



class ContaoManagerPlugin implements BundlePluginInterface, RoutingPluginInterface
{ 
    /** 
     * {@inheritdoc} 
     */ 
    public function getBundles(ParserInterface $parser) 
    { 
        return [ 
            BundleConfig::create(AppBundle\AppBundle::class) 
                ->setLoadAfter([ContaoCoreBundle::class]) 
        ]; 
    } 


    /**
     * Returns a collection of routes for this bundle.
     *
     * @param LoaderResolverInterface $resolver
     * @param KernelInterface         $kernel
     *
     * @return RouteCollection|null
     *
     * @throws \Exception
     */
    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
    {
        return $resolver
            ->resolve(__DIR__.'/../src/AppBundle/Resources/config/routing.yml')
            ->load(__DIR__.'/../src/AppBundle/Resources/config/routing.yml');

    }


}