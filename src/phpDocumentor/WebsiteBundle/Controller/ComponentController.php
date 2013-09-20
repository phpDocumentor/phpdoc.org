<?php
namespace phpDocumentor\WebsiteBundle\Controller;

use Github\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/component")
 */
class ComponentController extends Controller
{
    /**
     * @Route("/", name="component_list")
     * @Template()
     */
    public function indexAction()
    {
        $client = new Client();
        $repos = $client->api('user')->repositories('phpDocumentor');
        $barredRepos = array(
            'pdf.old_ocean',
            'phpdoc.org',
            'phpDocumentor2',
            'plugin-twig',
            'UnifiedAssetInstaller',
            'Scrybe'
        );
        foreach ($repos as $key => $repo) {
            if (substr($repo['name'], 0, 9) == 'template.' || $repo['fork'] == 1 || in_array($repo['name'], $barredRepos)) {
                unset($repos[$key]);
            }
        }

        return array('repositories' => $repos);
    }

    /**
     * @Route("/{name}", name="component_show")
     * @Template()
     */
    public function componentAction($name)
    {
        $parser = new \dflydev\markdown\MarkdownExtraParser();
        $data = json_decode(file_get_contents(
            'https://api.github.com/repos/phpDocumentor/'.$name
        ));
        $data->readme = $parser->transformMarkdown(file_get_contents(
            'https://raw.github.com/phpDocumentor/' . $name . '/master/README.md'
        ));

        return array('data' => $data);
    }
}
