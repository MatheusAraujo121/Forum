<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;

class ContentSeeder extends Seeder
{
    public function run()
    {
        // Criação de categorias
        $categoryGeekCulture = Category::firstOrCreate(['title' => 'Cultura Geek'], ['description' => 'Tudo sobre cultura geek: filmes, séries, animes, games, etc.']);
        $categoryAnime = Category::firstOrCreate(['title' => 'Anime'], ['description' => 'Discussões sobre animes e mangás']);
        $categoryGaming = Category::firstOrCreate(['title' => 'Gaming'], ['description' => 'Tudo sobre videogames e jogos de mesa']);
        $categoryTech = Category::firstOrCreate(['title' => 'Tecnologia'], ['description' => 'Discussões sobre inovação e novos gadgets']);

        // Criação de tags
        $tagAnime = Tag::create(['title' => 'Anime']);
        $tagGaming = Tag::create(['title' => 'Gaming']);
        $tagTech = Tag::create(['title' => 'Tech']);
        $tagMovies = Tag::create(['title' => 'Movies']);
        $tagComics = Tag::create(['title' => 'Comics']);

        // Criação de tópicos e posts associados
        $topic1 = Topic::create([
            'title' => 'O Impacto dos Animes na Cultura Pop',
            'description' => 'Como os animes influenciaram a cultura pop moderna.',
            'status' => 1,
            'category_id' => $categoryGeekCulture->id,
        ]);
        $topic1->tags()->attach([$tagAnime->id, $tagMovies->id]);

        $post1 = $topic1->post()->create([
            'image' => 'uploads/p1.jpg',
            'user_id' => 1,
        ]);

        // Comentários do primeiro tópico
        $comment1 = Comment::create([
            'content' => 'Os animes realmente tiveram uma grande influência no cinema e na televisão.',
            'topic_id' => $topic1->id,
        ]);
        $comment1->post()->create([
            'image' => 'uploads/c1.jpg',
            'user_id' => 2,
        ]);

        $comment2 = Comment::create([
            'content' => 'Com certeza! A estética dos animes é algo que muitos filmes tentam emular hoje em dia.',
            'topic_id' => $topic1->id,
        ]);
        $comment2->post()->create([
            'image' => 'uploads/c2.jpg',
            'user_id' => 3,
        ]);

        // Criação do segundo tópico
        $topic2 = Topic::create([
            'title' => 'Jogos de Vídeo: Passado, Presente e Futuro',
            'description' => 'Como os videogames evoluíram e para onde estão indo.',
            'status' => 1,
            'category_id' => $categoryGaming->id,
        ]);
        $topic2->tags()->attach([$tagGaming->id, $tagTech->id]);

        $post2 = $topic2->post()->create([
            'image' => 'uploads/p2.jpg',
            'user_id' => 2,
        ]);

        // Comentários do segundo tópico
        $comment3 = Comment::create([
            'content' => 'A evolução dos gráficos e das mecânicas de jogo é fascinante.',
            'topic_id' => $topic2->id,
        ]);
        $comment3->post()->create([
            'image' => 'uploads/c1.jpg',
            'user_id' => 4,
        ]);

        $comment4 = Comment::create([
            'content' => 'Com certeza! Os jogos de realidade virtual estão mudando completamente a forma de jogar.',
            'topic_id' => $topic2->id,
        ]);
        $comment4->post()->create([
            'image' => 'uploads/c2.jpg',
            'user_id' => 5,
        ]);

        // Criação do terceiro tópico
        $topic3 = Topic::create([
            'title' => 'A Era Dourada dos Quadrinhos',
            'description' => 'A influência dos quadrinhos no entretenimento moderno.',
            'status' => 1,
            'category_id' => $categoryGeekCulture->id,
        ]);
        $topic3->tags()->attach([$tagComics->id, $tagMovies->id]);

        $post3 = $topic3->post()->create([
            'image' => 'uploads/p3.jpg',
            'user_id' => 3,
        ]);

        // Comentários do terceiro tópico
        $comment5 = Comment::create([
            'content' => 'Os quadrinhos são a base de muitos dos maiores filmes de sucesso da atualidade.',
            'topic_id' => $topic3->id,
        ]);
        $comment5->post()->create([
            'image' => 'uploads/c1.jpg',
            'user_id' => 4,
        ]);

        $comment6 = Comment::create([
            'content' => 'Exatamente! Filmes como Vingadores e Batman são adaptações que conquistaram muitos fãs.',
            'topic_id' => $topic3->id,
        ]);
        $comment6->post()->create([
            'image' => 'uploads/c2.jpg',
            'user_id' => 5,
        ]);

        // Criação do quarto tópico
        $topic4 = Topic::create([
            'title' => 'O Futuro da Inteligência Artificial',
            'description' => 'Como a IA pode mudar todos os setores da sociedade.',
            'status' => 1,
            'category_id' => $categoryTech->id,
        ]);
        $topic4->tags()->attach([$tagTech->id]);

        $post4 = $topic4->post()->create([
            'image' => 'uploads/p4.jpg',
            'user_id' => 4,
        ]);

        // Comentários do quarto tópico
        $comment7 = Comment::create([
            'content' => 'A inteligência artificial tem o poder de transformar a medicina, a educação e até mesmo a arte.',
            'topic_id' => $topic4->id,
        ]);
        $comment7->post()->create([
            'image' => 'uploads/c1.jpg',
            'user_id' => 6,
        ]);

        $comment8 = Comment::create([
            'content' => 'Concordo! Já vemos muitas inovações com IA, como diagnósticos médicos e carros autônomos.',
            'topic_id' => $topic4->id,
        ]);
        $comment8->post()->create([
            'image' => 'uploads/c2.jpg',
            'user_id' => 7,
        ]);
    }
}
