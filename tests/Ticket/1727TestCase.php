<?php
/*
 *  $Id$
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.doctrine-project.org>.
 */

/**
 * Doctrine_Ticket_1727_TestCase
 *
 * @package     Doctrine
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @category    Object Relational Mapping
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision$
 */
class Doctrine_Ticket_1727_TestCase extends Doctrine_UnitTestCase 
{
    public function testTest()
    {
        $models1 = Doctrine_Core::loadModels(__DIR__ . '/1727/models1', Doctrine_Core::MODEL_LOADING_CONSERVATIVE);
        $models2 = Doctrine_Core::loadModels(__DIR__ . '/1727/models1', Doctrine_Core::MODEL_LOADING_CONSERVATIVE);
        $this->assertEqual($models1, $models2);

        $models1 = Doctrine_Core::loadModels(__DIR__ . '/1727/models1');
        $models2 = Doctrine_Core::loadModels(__DIR__ . '/1727/models1');
        $this->assertEqual($models1, $models2);

        $models1 = Doctrine_Core::loadModels(__DIR__ . '/1727/models1', Doctrine_Core::MODEL_LOADING_CONSERVATIVE);
        $models2 = Doctrine_Core::loadModels(__DIR__ . '/1727/models1', Doctrine_Core::MODEL_LOADING_CONSERVATIVE);
        $this->assertEqual($models1, $models2);

        $models1 = Doctrine_Core::loadModels(__DIR__ . '/1727/models2', Doctrine_Core::MODEL_LOADING_CONSERVATIVE);
        $models2 = Doctrine_Core::loadModels(__DIR__ . '/1727/models2', Doctrine_Core::MODEL_LOADING_CONSERVATIVE);
        $this->assertEqual($models1, $models2);

        $models1 = Doctrine_Core::loadModels(__DIR__ . '/1727/models2');
        $models2 = Doctrine_Core::loadModels(__DIR__ . '/1727/models2');
        $this->assertEqual($models1, $models2);

        $models1 = Doctrine_Core::loadModels(__DIR__ . '/1727/models2', Doctrine_Core::MODEL_LOADING_CONSERVATIVE);
        $models2 = Doctrine_Core::loadModels(__DIR__ . '/1727/models2', Doctrine_Core::MODEL_LOADING_CONSERVATIVE);
        $this->assertEqual($models1, $models2);

        $models1 = Doctrine_Core::loadModels(array(__DIR__ . '/1727/models1', __DIR__ . '/1727/models2'));
        $models2 = Doctrine_Core::loadModels(array(__DIR__ . '/1727/models1', __DIR__ . '/1727/models2'));
        $this->assertEqual($models1, $models2);

        $models1 = Doctrine_Core::loadModels(array(__DIR__ . '/1727/models1', __DIR__ . '/1727/models2'), Doctrine_Core::MODEL_LOADING_CONSERVATIVE);
        $models2 = Doctrine_Core::loadModels(array(__DIR__ . '/1727/models1', __DIR__ . '/1727/models2'), Doctrine_Core::MODEL_LOADING_CONSERVATIVE);
        $this->assertEqual($models1, $models2);
    }
}
