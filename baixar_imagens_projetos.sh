#!/bin/bash
# Script para baixar 10 imagens de exemplo do Unsplash para a pasta storage/app/public/projetos

mkdir -p storage/app/public/projetos

urls=(
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
)

for i in "${!urls[@]}"; do
  curl -L "${urls[$i]}" -o "storage/app/public/projetos/imagem_$((i+1)).jpg"
done

echo "Imagens baixadas em storage/app/public/projetos"
