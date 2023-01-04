<?php

function get_base_url()
{
    $proto = empty($_SERVER['HTTS']) ? "http" : "https";
    return $proto . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
}

function get_sections($template)
{
    $sections = [
        'meta' => 1,
        'header' => 1,
        'content' => $template,
        'footer' => 1
    ];

    switch ($template) {
        case 'breaking-news':
        case 'menu':
        case 'footer':
            $sections['meta'] = 0;
            $sections['header'] = 0;
            $sections['footer'] = 0;
            break;
    }

    return array_filter($sections);
}

function get_section_node_by_class($section, $className)
{
    return get_section_node_by_xpath($section,"//*[contains(@class, '$className')]");
}

function get_section_node_by_id($section, $id)
{
    return get_section_node_by_xpath($section,"//*[@id='$id']");
}

function get_section_node_by_tag($section, $tag)
{
    return get_section_node_by_xpath($section,"//$tag");
}
function get_section_node_by_xpath($section, $query)
{
    try {

        $html = '';

        ob_start();
        include_section($section);
        $content = ob_get_contents();
        ob_clean();

        $dom = new DomDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($content);
        libxml_clear_errors();
        $finder = new DomXPath($dom);

        //*[@id="element_id"]
        $nodes = $finder->query($query);
        if ($nodes) {
            $html = $dom->saveHTML($nodes[0]);
        }

    } catch (\Exception $e) {
        echo $e -> getTraceAsString();
        exit();
    }

    return $html;
}

/**
 * Retrieve template section
 *
 * @param [string] $section
 * @return void
 */
function include_section($section, $id = null, $title = null, $var = null)
{

    if ($section == 'content') {

        // Include the page content
        include_content_page($id);

    } else {
        include 'templates/sections/' . $section . '.php';
    }

}

/**
 * Retrieve page template content
 *
 * @param [string] $section
 * @return void
 */
function include_content_page($page)
{
    if (empty($page)) {
        include 'templates/homepage.php';
    } else {
        include 'templates/' . $page . '.php';
    }
}

/**
 * Retrieve image from absolute path
 *
 * @param [string] $img
 * @return void
 */
function img_path($img)
{
    $base_url = get_base_url();
    return $base_url . '/assets/img/' . $img;
}

/**
 * Retrieve component with changing of variables if needed
 *
 * @param [type] $el
 * @param [type] $var
 * @param boolean $include
 * @return void
 */
function get_component($el, $var, $var2, $include = true)
{
    include 'templates/components/' . $el . '.php';
}
