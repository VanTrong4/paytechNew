<style>
  @media not print {
    body {
      display: none;
    }
  }

  @page {
    size: auto;
    margin: 23mm 0;
  }

  @page :footer {
    display: none;
  }

  @page :header {
    display: none;
  }

  body {
    font-family: "游明朝", "Yu Mincho", "游明朝体", "YuMincho", "ヒラギノ明朝 Pro W3", "Hiragino Mincho Pro", "HiraMinProN-W3", "Sawarabi Mincho", "HGS明朝E", "ＭＳ Ｐ明朝", "MS PMincho", serif;
    font-size: 14px;
    line-height: 1.7;
    max-width: 1000px;
    margin: 0 auto;
    position: relative;
    text-align: justify;
    padding: 0 70px;
  }

  ul,
  p {
    margin-top: 0;
    margin-bottom: 1rem;
  }

  .nm {
    margin-bottom: 0;
  }

  h1 {
    text-align: center;
    font-size: 22px;
    margin-top: 0;
  }

  table,
  th,
  td {
    border: 1px solid;
  }

  table {
    border-collapse: collapse;
  }

  th,
  td {
    padding: 15px;
  }

  .empty {
    background-color: #ccc;
    position: fixed;
    left: 0;
    right: 0;
    height: 50px;
  }

  .top {
    top: 0;
  }

  .bot {
    bottom: 0;
  }

  .pagebreak {
    page-break-before: always;
  }

  ul {
    margin-left: 0;
    margin-bottom: 1rem;
    padding-left: 0;
    list-style: none;
    counter-reset: counter-ul;
  }

  ul>li {
    position: relative;
    padding-left: 0;
  }

  ul>li::before {
    position: absolute;
    left: 0;
    /* 
      counter-increment: counter-ul;
      content: counter(counter-ul)"."; */
  }

  ol {
    margin-top: 0;
    margin-bottom: 1rem;
    padding-left: 20px;
    list-style: none;
    counter-reset: counter-ol;
  }

  ol>li {
    position: relative;
    padding-left: 0;
  }

  ul>li>ol {
    margin-left: 0;
    padding-left: 0;
    margin-bottom: 0;
  }

  ol>li::before {
    position: absolute;
    left: 0;
    /* 
      counter-increment: counter-ol;
      content: "(" counter(counter-ol) ")"; */
  }
</style>