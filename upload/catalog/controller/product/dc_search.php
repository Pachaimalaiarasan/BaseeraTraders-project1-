<?php
    namespace Opencart\Catalog\Controller\Product;

    class DcSearch extends \Opencart\System\Engine\Controller {
        public function autocomplete(): void {
            $json = [];

            if (!empty($this->request->get['filter_name'])) {
                $this->load->model('catalog/product');
                $this->load->model('tool/image');

                $filter_data = [
                    'filter_name' => $this->request->get['filter_name'],
                    'start'       => 0,
                    'limit'       => 10
                ];

                $results = $this->model_catalog_product->getProducts($filter_data);

                foreach ($results as $result) {
                    $json[] = [
                        'product_id' => $result['product_id'],
                        'name'       => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
                        'href'       => $this->url->link('product/product', 'product_id=' . $result['product_id']),
                        'image'      => $result['image'] ? $this->model_tool_image->resize($result['image'], 40, 40) : false
                    ];
                }
            }

            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
        }
    }
