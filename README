# Metis SOAP client

This library provides an PHP implementation of the Metis Soap service.

Metis is a service provided by VG WORT - Verwertungsgesellschaft Wort - to
enable authors and publishers to count the usage of documents published to
the internets.

## Standards

* PSR-1: Basic Coding Standard
* PSR-4: Improved Autoloading
* PSR-12: Extended Coding Style Guide

## Installation

    composer require sanduhrs/metis-soap-client

## Usage examples

### Initialization

    use sanduhrs\Metis\MetisClientFactory;
    
    $login = $_ENV['METIS_LOGIN'];
    $password = $_ENV['METIS_PASSWORD'];
    
    $client = MetisClientFactory::factory(
      'https://tom.vgwort.de/services/1.0/pixelService.wsdl',
      [
        'login' => $login,
        'password' => $password,
      ]
    );

### Order pixel(s)

    $count = 1;
    $response = $client->orderPixel(new OrderPixelRequest($count));
    
    $response->getDomain(); // vg00.met.vgwort.de
    $response->getOrderDateTime(); // 197001010000
    foreach ($response->getPixels() as $pixel) {
      $pixel->getPublicIdentificationId();  // 9dde9503649dh46xc89dk682422686e7
      $pixel->getPrivateIdentificationId(); // 463fbf719dd96er77kla97622po27185
    }

### Pixel overview

    $offset = 0;
    $type = 'MINDESTZUGRIFF';
    $response = $client->pixelOverview(new PixelOverviewRequest($offset, $type));
    
    $response->getOffset; // 0
    $response->getAmount; // 6
    foreach ($response->getPrivateIdentificationId() as $privateIdentificationId) {
      $privateIdentificationId; // e8cf1jd89ie34ok56nh21sd876adf536
    }

## License

PHP Metis SOAP client
Copyright (C) 2020  Stefan Auditor <stefan@auditor.email>

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
