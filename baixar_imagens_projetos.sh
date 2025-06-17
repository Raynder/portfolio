#!/bin/bash
# Script para baixar 20 imagens de projetos e 10 imagens de perfis do Unsplash/RandomUser

mkdir -p storage/app/public/projetos
mkdir -p storage/app/public/perfil

# 20 imagens de projetos
project_urls=(
  "https://images.unsplash.com/photo-1465101046530-73398c7f28ca?w=800"
  "https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=800"
  "https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=800"
  "https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?w=800"
  "https://images.unsplash.com/photo-1465101178521-c1a9136a3b99?w=800"
  "https://images.unsplash.com/photo-1465101046530-73398c7f28ca?w=800"
  "https://images.unsplash.com/photo-1465101178521-c1a9136a3b99?w=800"
  "https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=800"
  "https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=800"
  "https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?w=800"
  "https://images.unsplash.com/photo-1465101046530-73398c7f28ca?w=800&2"
  "https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=800&2"
  "https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=800&2"
  "https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?w=800&2"
  "https://images.unsplash.com/photo-1465101178521-c1a9136a3b99?w=800&2"
  "https://images.unsplash.com/photo-1465101046530-73398c7f28ca?w=800&3"
  "https://images.unsplash.com/photo-1465101178521-c1a9136a3b99?w=800&3"
  "https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=800&3"
  "https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=800&3"
  "https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?w=800&3"
)

for i in "${!project_urls[@]}"; do
  curl -L "${project_urls[$i]}" -o "storage/app/public/projetos/imagem_$((i+1)).jpg"
done

# 10 imagens de perfis
profile_urls=(
  "https://randomuser.me/api/portraits/men/1.jpg"
  "https://randomuser.me/api/portraits/women/2.jpg"
  "https://randomuser.me/api/portraits/men/3.jpg"
  "https://randomuser.me/api/portraits/women/4.jpg"
  "https://randomuser.me/api/portraits/men/5.jpg"
  "https://randomuser.me/api/portraits/women/6.jpg"
  "https://randomuser.me/api/portraits/men/7.jpg"
  "https://randomuser.me/api/portraits/women/8.jpg"
  "https://randomuser.me/api/portraits/men/9.jpg"
  "https://randomuser.me/api/portraits/women/10.jpg"
)

for i in "${!profile_urls[@]}"; do
  curl -L "${profile_urls[$i]}" -o "storage/app/public/perfil/perfil_$((i+1)).jpg"
done

echo "Imagens de projetos baixadas em storage/app/public/projetos"
echo "Imagens de perfis baixadas em storage/app/public/perfil"
