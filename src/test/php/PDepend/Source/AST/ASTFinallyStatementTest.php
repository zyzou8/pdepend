<?php
/**
 * This file is part of PDepend.
 *
 * PHP Version 5
 *
 * Copyright (c) 2008-2017 Manuel Pichler <mapi@pdepend.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @copyright 2008-2017 Manuel Pichler. All rights reserved.
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 */

namespace PDepend\Source\AST;

/**
 * Test case for the {@link \PDepend\Source\AST\ASTFinallyStatement} class.
 *
 * @copyright 2008-2017 Manuel Pichler. All rights reserved.
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 *
 * @covers \PDepend\Source\Language\PHP\AbstractPHPParser
 * @covers \PDepend\Source\AST\ASTFinallyStatement
 * @group unittest
 */
class ASTFinallyStatementTest extends ASTNodeTest
{
    /**
     * Tests the start line value.
     *
     * @return void
     */
    public function testFinallyStatementHasExpectedStartLine()
    {
        $stmt = $this->getFirstFinallyStatementInFunction(__METHOD__);
        $this->assertEquals(8, $stmt->getStartLine());
    }

    /**
     * Tests the start column value.
     *
     * @return void
     */
    public function testFinallyStatementHasExpectedStartColumn()
    {
        $stmt = $this->getFirstFinallyStatementInFunction(__METHOD__);
        $this->assertEquals(7, $stmt->getStartColumn());
    }

    /**
     * Tests the end line value.
     *
     * @return void
     */
    public function testFinallyStatementHasExpectedEndLine()
    {
        $stmt = $this->getFirstFinallyStatementInFunction(__METHOD__);
        $this->assertEquals(10, $stmt->getEndLine());
    }

    /**
     * Tests the end column value.
     *
     * @return void
     */
    public function testFinallyStatementHasExpectedEndColumn()
    {
        $stmt = $this->getFirstFinallyStatementInFunction(__METHOD__);
        $this->assertEquals(5, $stmt->getEndColumn());
    }

    /**
     * testOnlyFinallyStatementHasExpectedStartLine
     *
     * @return void
     */
    public function testOnlyFinallyStatementHasExpectedStartLine()
    {
        $stmt = $this->getFirstFinallyStatementInFunction(__METHOD__);
        $this->assertEquals(6, $stmt->getStartLine());
    }

    /**
     * testOnlyFinallyStatementHasExpectedStartColumn
     *
     * @return void
     */
    public function testOnlyFinallyStatementHasExpectedStartColumn()
    {
        $stmt = $this->getFirstFinallyStatementInFunction(__METHOD__);
        $this->assertEquals(7, $stmt->getStartColumn());
    }

    /**
     * testOnlyFinallyStatementHasExpectedEndLine
     *
     * @return void
     */
    public function testOnlyFinallyStatementHasExpectedEndLine()
    {
        $stmt = $this->getFirstFinallyStatementInFunction(__METHOD__);
        $this->assertEquals(8, $stmt->getEndLine());
    }

    /**
     * testOnlyFinallyStatementHasExpectedEndColumn
     *
     * @return void
     */
    public function testOnlyFinallyStatementHasExpectedEndColumn()
    {
        $stmt = $this->getFirstFinallyStatementInFunction(__METHOD__);
        $this->assertEquals(5, $stmt->getEndColumn());
    }

    /**
     * testThirdChildOfFinallyStatementIsScopeStatement
     *
     * @return void
     */
    public function testChildOfFinallyStatementIsScopeStatement()
    {
        $stmt = $this->getFirstFinallyStatementInFunction(__METHOD__);
        $this->assertInstanceOf('PDepend\\Source\\AST\\ASTScopeStatement', $stmt->getChild(0));
    }

    /**
     * Returns a node instance for the currently executed test case.
     *
     * @param string $testCase Name of the calling test case.
     *
     * @return \PDepend\Source\AST\ASTFinallyStatement
     */
    private function getFirstFinallyStatementInFunction($testCase)
    {
        return $this->getFirstNodeOfTypeInFunction(
            $testCase,
            'PDepend\\Source\\AST\\ASTFinallyStatement'
        );
    }
}
