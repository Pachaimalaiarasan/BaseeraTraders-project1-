<?php
    namespace Opencart\Catalog\Controller\Checkout;

    class DcCart extends \Opencart\System\Engine\Controller {

        public function edit(): void {
            $this->load->language('checkout/cart');

            $json = [];

            if (!empty($this->request->post['quantity'])) {
                foreach ($this->request->post['quantity'] as $key => $value) {
                    if ((int)$value > 0) {
                        $this->cart->update($key, $value);
                    } else {
                        $this->cart->remove($key);
                    }
                }
                $json['success'] = $this->language->get('text_remove');
                unset($this->session->data['shipping_method']);
                unset($this->session->data['shipping_methods']);
                unset($this->session->data['payment_method']);
                unset($this->session->data['payment_methods']);
                unset($this->session->data['reward']);
            } else {
                $json['error'] = 'No data to update.';
            }

            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
        }

        public function remove(): void {
            $json = [];
            if (isset($this->request->post['cart_id'])) {
                $cart_id = $this->request->post['cart_id'];
                $this->cart->remove($cart_id); 
                $json['success'] = $this->language->get('text_remove');
                unset($this->session->data['shipping_method']);
                unset($this->session->data['shipping_methods']);
                unset($this->session->data['payment_method']);
                unset($this->session->data['payment_methods']);
                unset($this->session->data['reward']);
            } else {
                $json['error'] = 'Brak cart_id';
            }
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
        }
    }
