<?php

class AddController extends Controller
{
    public function create()
    {
        return $this->view('create');
    }

    public function saveDVD()
    {
        $item = $this->model('Item');
        $attribute = $_POST['size']."MB";
        $item->insertItem($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['type'], $attribute);
        header("Location: /");
    }

    public function saveBook()
    {
        $item = $this->model('Item');
        $attribute = $_POST['weight']."KG";
        $item->insertItem($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['type'], $attribute);
        header("Location: /");
    }

    public function saveFurniture()
    {
        $item = $this->model('Item');
        $attribute = $_POST['height'].'x'.$_POST['width'].'x'.$_POST['length'];
        $item->insertItem($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['type'], $attribute);
        header("Location: /");
    }

    public function validateDVD()
    {
        $values = array('sku' => null, 'name' => null, 'price' => null, 'type' => null, 'size' => null);
        $errors = array('skuErr' => '', 'nameErr' => '', 'priceErr' => '', 'typeErr' => '', 'sizeErr' => '', 'weightErr' => '', 'heightErr' => '', 'widthErr' => '', 'lengthErr' => '');
        $this->validateFirstPart($values, $errors);
        $this->validateAttr($values, $errors, 'size');
        if (!$this->hasErrors($errors))
        {
            echo json_encode(['errors' => null]);
        }
        else
        {
            echo json_encode(['errors' => $errors]);
        }
    }

    public function validateBook()
    {
        $values = array('sku' => null, 'name' => null, 'price' => null, 'type' => null, 'weight' => null);
        $errors = array('skuErr' => '', 'nameErr' => '', 'priceErr' => '', 'typeErr' => '', 'weightErr' => '', 'sizeErr' => '', 'heightErr' => '', 'widthErr' => '', 'lengthErr' => '');
        $this->validateFirstPart($values, $errors);
        $this->validateAttr($values, $errors, 'weight');
        if (!$this->hasErrors($errors))
        {
            echo json_encode(['errors' => null]);
        }
        else
        {
            echo json_encode(['errors' => $errors]);
        }
    }

    public function validateFurniture()
    {
        $values = array('sku' => null, 'name' => null, 'price' => null, 'type' => null, 'height' => null, 'width' => null, 'length' => null);
        $errors = array('skuErr' => '', 'nameErr' => '', 'priceErr' => '', 'typeErr' => '', 'heightErr' => '', 'widthErr' => '', 'lengthErr' => '', 'sizeErr' => '', 'weightErr' => '');
        $this->validateFirstPart($values, $errors);
        $this->validateAttr($values, $errors, 'length');
        $this->validateAttr($values, $errors, 'width');
        $this->validateAttr($values, $errors, 'height');
        if (!$this->hasErrors($errors))
        {
            echo json_encode(['errors' => null]);
        }
        else
        {
            echo json_encode(['errors' => $errors]);
        }
    }

    private function validateFirstPart(&$values, &$errors)
    {
        $item = $this->model('Item');
        //SKU
        if (!empty($_POST['sku']))
        {
            $sku = $this->refactorInput($_POST['sku']);
            if (!$item->existsSku($_POST['sku']))
            {
                if (strlen($sku) <= 255)
                {
                    $values['sku'] = $sku;
                }
                else
                {
                    $errors['skuErr'] = 'SKU must be eaqual or less than 255 characters';
                }
            }
            else
            {
                $errors['skuErr'] = 'Provide UNIQUE SKU';
            }
        }
        else
        {
            $errors['skuErr'] = 'Please, submit required data';
        }
        //NAME
        if (!empty($_POST['name']))
        {
            $name = $this->refactorInput($_POST['name']);
            if (strlen($name) <= 255)
            {
                $values['name'] = $name;
            }
            else
            {
                $errors['nameErr'] = 'Name must be eaqual or less than 255 characters';
            }
        }
        else
        {
            $errors['nameErr'] = 'Please, submit required data';
        }
        //PRICE
        if (!empty($_POST['price']))
        {
            if (preg_match('/^\d{1,8}([.,]\d{1,2})?$/i', $this->refactorInput($_POST['price'])))
            {
                $values['price'] = str_replace(',', '.', $this->refactorInput($_POST['price']));
            }
            else
            {
                $errors['priceErr'] = 'Please, provide the data of indicated type: 0.01';
            }
        }
        else
        {
            $errors['priceErr'] = 'Please, submit required data';
        }
        //TYPE
        if (!empty($_POST['type']))
        {
            $type = $this->refactorInput($_POST['type']);
            if ($type == 'DVD' || $type == 'Book' || $type == 'Furniture')
            {
                $values['type'] = $this->refactorInput($_POST['type']);
            }
            else
            {
                $errors['typeErr'] = 'Please, provide the data of indicated type';
            }
        }
        else
        {
            $errors['typeErr'] = 'Please, submit required data';
        }
    }

    private function refactorInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    private function validateAttr(&$values, &$errors, $attr)
    {
        if (!empty($_POST[$attr]))
        {
            $value = $this->refactorInput($_POST[$attr]);
            if (preg_match('/^\d*[.,]?\d*$/i', $value) && strlen($value) <= 255)
            {
                $values[$attr] = $value;
            }
            else
            {
                $errors[$attr.'Err'] = 'Please, provide the data of indicated type';
            }
        }
        else
        {
            $errors[$attr.'Err'] = 'Please, submit required data';
        }
    }

    private function hasErrors($errors)
    {
        foreach ($errors as $key => $value) {
            if ($value != '')
            {
                return true;
            }
        }
    }
}