# Looker

[![Looker-Movie](/images/lookerlogo.png)](https://youtu.be/ra9tMS8HjLY)

## 製品概要
### MarketTech(市場テック)

### 背景（製品開発のきっかけ、課題等）
- こんかいのプロダクトの開発に至った背景
メンバーには靴やファッション好きが多いです。
また、最近では「フリマサービスを使った」**モノの売買**が流行っています。その中でも靴の市場規模は非常に大きく、2025年までに全世界で約6600億円の市場規模が予想されています。スニーカーをフリマサービスで売買を副業として活用している人もいたり、生計を立てている人もいます。

- 着目した顧客・顧客の課題・現状
そういったフリマサービスのデメリットとして価格形成が難しいことが挙げられます。それを`株式取引`と似た形式にすることで、長い目で見ると変動しますが、`最高値や最低値によって、現在の価格がある程度保証`されます。また、株式取引と同じようにチャートを活用することで、買い手売り手双方ともモノの価値を予想する機会が与えられることにもなります。普段見ないプロダクトであり、かつメンバーが当事者意識を持てるジャンルでプロダクトを開発しました。特に、**3D表示**により商品を画面上で色んな角度から確認可能な機能には注目です。

### 製品説明（具体的な製品の説明）
モノの市場価値を株化し、売買するプラットフォームを提供するアプリケーションです。

### 特長

#### 1. モノの価値や相場が一目で分かる

#### 2. 価値の変動を株式取引のようなチャートで見れる

#### 3. 画像を見るときに3D表示が可能(商品をあらゆる角度から確認出来る)

#### 4. 既存事業との比較(C2Cの売買プラットフォーム)
|  |時価について  |商品を受け取った  |
|---|---|---|---|
|メルカリ|分からない  |出来ない  |
| Looker  |　表示されている  |可能   |

### 解決出来ること
#### 買う側
1. 商品購入時の適正価格が分かる
[![lowest](/images/lowest.jpg)]

通常のフリマサービスで、高い価格で買って損してしまう、ということが起こらない。
「今」いくらで買う事が適正価格なのかが可視化されており、相場や即決価格が分かる。

2. チャートがあるため、いつが買い時なのかが分かりやすい。
[![chart](/images/chart.png)]

3. 3D表示を導入することによって満足に商品を確認できるようになり、ネット販売の弱みをカバー出来る。

####  売る側
1. 最高値を確認できる。こちらも買う側と似ているが、通常の取引で起きる、安い値段で売ってしまうという損をなくせる。

2. 売る側としてもチャートがあるため、いつが売り時なのかが分かりやすい。

### 今後の展望
#### 技術的展望
- 画像解析技術によって、真偽判定ができるようにしたい
- AIを使ったチャート予測機能を付け加えたい
- Looker上にある商品の背景色を選ぶ時に、商品の色を参照した自動学習により、商品をより引き立たせる背景色に設定させたい

#### ビジネス的展望
- 3D機能を、靴以外の洋服やアクセサリーなどもっと色んな種類のものを簡単に3Dにし、出品できるようにしたい
- 出品物の真偽が分かるような仕組み作りをしたい
- 新品も中古も出品できるようにしたい

## 開発内容・開発技術
### 活用した技術
#### API・データ
* スニーカー取引データ
* 3Dモデリング
* 自作API
    * スニーカーAPI
    * 取引API

#### フレームワーク・ライブラリ・モジュール
* Swift
* PHP/Laravel
* Swagger
* MySQL
* Docker
* SceneKit
* Nginx
* AWS(S3、CloudFront)

#### デバイス
* 検証端末(iPhone 11 Pro Max)

### 研究内容・事前開発プロダクト（任意）

なし

### 独自開発技術（Hack Dayで開発したもの）
#### 2日間に開発した独自の機能・技術
* 独自で開発したものの内容をこちらに記載してください
* 特に力を入れた部分をファイルリンク、またはcommit_idを記載してください（任意）
